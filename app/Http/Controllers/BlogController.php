<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(8);
        $categories = BlogCategory::all();
        return view('frontend.blog.index' , compact(['blogs' , 'categories']));
    }

    public function blogView($id){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $blog = Blog::find($id);
        $categories = BlogCategory::all();
        return view('frontend.blog_details' , compact(['blogs' , 'blog' , 'categories']));
    }

    public function blogCreate(){
        return view('backend.blog.blog_create');
    }
    
    public function blogList(){
        $blogs = Blog::all();
        $categories = BlogCategory::all();
        return view('backend.blog.blog_list' , compact(['blogs' , 'categories']));
    }

    public function blogDelete($id){
        $item = Blog::find($id);

        if (file_exists(public_path($item->image))) {
            unlink(public_path($item->image));
        }

        $item->delete();

        return back()->with('deleted' , 'Blog Deleted Successfully');
    }

    public function editBlog($id){
        $item = Blog::find($id);
        $categories = BlogCategory::all();
        return view('backend.blog.blog_edit' , compact(['item' , 'categories']));
    }

    public function blogStore(Request $request){        
        $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required',
            'image'        => 'required',
            'short_desp'   => 'required',
        ]);

        if ( $request->file('image')) {

            $image = $request->file('image');  
            $manager = new ImageManager(new Driver());
            $name = 'blog_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/blog/' . $name));            
        }

        Blog::create([
            'title'       => $request->title,
            'short_desp'  => $request->short_desp,
            'content'     => $request->content,
            'author'      => $request->author ?? Auth::user()->name,
            'date'        => $request->date ?? Carbon::now(),
            'category'    => $request->category,
            'image'       => 'backend/blog/' . $name,
            'tags'        => $request->tags ?? '',
            'created_at'  => Carbon::now(),
        ]);

        return back()->with('success', 'Blog Created Successfully!');
    }

    public function blogCategoryStore(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // If validation fails, return back with errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Generate slug from name
        $slug = Str::slug($request->name);

        // Handle image upload
        $imagePath = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $imageName = 'category_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/blog/' . $imageName));  
            $imagePath = 'backend/blog/' . $imageName; 
        }

        // Insert data into the database
        BlogCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
            'image' => $imagePath,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Blog category added successfully!');
    }

    public function categoryStatusUpdate($id)
    {
        $category = BlogCategory::find($id);

        if ($category) {
            $category->update([
                'status' => $category->status == 1 ? 0 : 1, // Toggle status
            ]);

            return back()->with('success', 'Category status updated successfully!');
        }

        return back()->with('error', 'Category not found!');
    }
    
    public function blogCategoryDelete($id)
    {
        $blog = BlogCategory::find($id);

        if ($blog->image) {
            if (file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
        }
        $blog->delete();
        
        return back()->with('category_deleted', 'Blog category deleted successfully!');
    }

    public function blogUpdate(Request $request , $id){

        $blog = Blog::find($id);

        $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required',
        ]);

        if ( $request->file('image')) {

            if (file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }            
            $image = $request->file('image');  
            $manager = new ImageManager(new Driver());
            $name = 'blog_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/blog/' . $name));
            
            $blog->image = 'backend/blog/' . $name;            
        }

        $blog->title       = $request->title;
        $blog->short_desp  = $request->short_desp;
        $blog->content     = $request->content;
        $blog->author      = $request->author ?? Auth::user()->name;
        $blog->date        = $request->date ?? Carbon::now();
        $blog->category    = $request->category;        
        $blog->tags        = $request->tags ?? '';
        $blog->updated_at  = Carbon::now();

        $blog->save();

        return back()->with('success', 'Blog Updated Successfully!');
    }

    
}
