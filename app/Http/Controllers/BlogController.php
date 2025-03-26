<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\News;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //
    public function getDistrictWithAjax($division_id)
    {
        $ship = ShipDistrict::where('division_id', $division_id)->orderBy('district_name', 'ASC')->get();
        return json_encode($ship);
    }

    //  get state with ajax
    public function getStateWithAjax($district_id)
    {
        $ship = ShipState::where('district_id', $district_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($ship);
    }
    public function blog()
    {

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(8);
        $categories = BlogCategory::all();
        return view('frontend.blog.index', compact(['blogs', 'categories']));
    }

    public function blogView($id)
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $blog = Blog::find($id);
        $categories = BlogCategory::all();
        return view('frontend.blog_details', compact(['blogs', 'blog', 'categories']));
    }

    public function blogCreate()
    {
        $categories = BlogCategory::orderBy('name', 'ASC')->get();
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        return view('backend.blog.blog_create', compact('categories', 'divisions'));
    }

    public function blogList()
    {
        $blogs = Blog::all();
        $categories = BlogCategory::all();
        return view('backend.blog.blog_list', compact(['blogs', 'categories']));
    }

    public function blogDelete($id)
    {
        $item = Blog::find($id);

        if (file_exists(public_path($item->image))) {
            unlink(public_path($item->image));
        }

        $item->delete();

        return back()->with('deleted', 'Blog Deleted Successfully');
    }

    public function editBlog($id)
    {
        $item = News::find($id);
        $categories = BlogCategory::orderBy('name', 'ASC')->get();
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        return view('backend.blog.blog_edit', compact(['item', 'categories','divisions']));
    }

    public function blogStore(Request $request)
    {
        // dd($request->all(), $request->file());   
        $validatedData = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required',
            'division_id'   => 'required',
            'district_id'   => 'required',
            'state_id'   => 'required',
            'category_id'   => 'required',
            'short_description'   => 'required',
            'featured_image'   => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            'thumnail_image'   => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);
        // dd($validatedData);
        if ($request->file('thumnail_image')) {

            $image = $request->file('thumnail_image');
            $manager = new ImageManager(new Driver());
            $thumnailname = 'thumnail_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/news/' . $thumnailname));
        }
        if ($request->file('featured_image')) {

            $image = $request->file('featured_image');
            $manager = new ImageManager(new Driver());
            $featurename = 'feature_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/news/' . $featurename));
        }

        News::create([
            'user_id'       => Auth::user()->id,
            'division_id'       => $request->division_id,
            'district_id'       => $request->district_id,
            'state_id'       => $request->state_id,
            'category_id'       => $request->category_id,
            'title'       => $request->title,
            'slug'       => Str::slug($request->title),
            'short_description'  => $request->short_description,
            'content'     => $request->content,
            'author'      => Auth::user()->name,
            'date'        => $request->date ?? Carbon::now(),
            'featured_image'       => 'backend/news/' . $featurename,
            'thumnail_image'       => 'backend/news/' . $thumnailname,
            'tags'        => $request->tags ?? '',
            'status'        => $request->status ?? 0,
            'created_at'  => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'News Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
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

    public function blogUpdate(Request $request, $id)
    {

        $news = News::find($id);

        //     $request->validate([
        //         'title'        => 'required|string|max:255',
        //         'content'      => 'required',
        //     ]);

        //     if ($request->file('image')) {

        //         if (file_exists(public_path($blog->image))) {
        //             unlink(public_path($blog->image));
        //         }
        //         $image = $request->file('image');
        //         $manager = new ImageManager(new Driver());
        //         $name = 'blog_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
        //         $img = $manager->read($image);
        //         $img->save(public_path('backend/blog/' . $name));

        //         $blog->image = 'backend/blog/' . $name;
        //     }

        //     $blog->title       = $request->title;
        //     $blog->short_desp  = $request->short_desp;
        //     $blog->content     = $request->content;
        //     $blog->author      = $request->author ?? Auth::user()->name;
        //     $blog->date        = $request->date ?? Carbon::now();
        //     $blog->category    = $request->category;
        //     $blog->tags        = $request->tags ?? '';
        //     $blog->updated_at  = Carbon::now();

        //     $blog->save();

        //     return back()->with('success', 'Blog Updated Successfully!');
        // }
        // {
        // dd($request->all(), $request->file());   
        $validatedData = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required',
            'division_id'   => 'required',
            'district_id'   => 'required',
            'state_id'   => 'required',
            'category_id'   => 'required',
            'short_description'   => 'required',
            'featured_image'   => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            'thumnail_image'   => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);
        // dd($validatedData);
        if ($request->file('thumnail_image')) {
            if (file_exists(public_path($news->thumnail_image))) {
                unlink(public_path($news->thumnail_image));
            }
            $image = $request->file('thumnail_image');
            $manager = new ImageManager(new Driver());
            $thumnailname = 'thumnail_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/news/' . $thumnailname));
            $news->thumnail_image = 'backend/news/' . $thumnailname;
        }
        if ($request->file('featured_image')) {
            if (file_exists(public_path($news->featured_image))) {
                unlink(public_path($news->featured_image));
            }
            $image = $request->file('featured_image');
            $manager = new ImageManager(new Driver());
            $featurename = 'feature_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/news/' . $featurename));
            $news->featured_image = 'backend/news/' . $featurename;
        }



        $news->user_id = Auth::user()->id;
        $news->division_id = $request->division_id;
        $news->district_id = $request->district_id;
        $news->state_id  = $request->state_id;
        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->slug  = Str::slug($request->title);
        $news->short_description  = $request->short_description;
        $news->content = $request->content;
        $news->author = Auth::user()->name;
        $news->date  = $request->date ?? Carbon::now();

        $news->tags  = $request->tags ?? '';
        $news->status = $request->status ?? 0;
        $news->updated_at = Carbon::now();

        $news->save();
        $notification = array(
            'message' => 'News Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
