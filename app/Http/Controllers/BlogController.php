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
use Yajra\DataTables\Facades\DataTables;

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

    public function newsView($slug)
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
        $categories = BlogCategory::all();
        return view('backend.blog.blog_list',compact('categories'));
    }

    public function blogDelete($id)
    {
        $item = News::find($id);

        if (file_exists(public_path($item->thumnail_image))) {
            unlink(public_path($item->thumnail_image));
        }
        if (file_exists(public_path($item->featured_image))) {
            unlink(public_path($item->featured_image));
        }

        logActivity('Delete', "Deleted the news article: {$item->title}", 'News', $id);
        
        $item->delete();

        $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

    public function editBlog($id)
    {
        $item = News::find($id);
        $categories = BlogCategory::orderBy('name', 'ASC')->get();
        $divisions = ShipDivision::orderBy('division_name', 'ASC')->get();
        return view('backend.blog.blog_edit', compact(['item', 'categories', 'divisions']));
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

        $id = News::insertGetId([
            'user_id'           => Auth::user()->id,
            'division_id'       => $request->division_id,
            'district_id'       => $request->district_id,
            'state_id'          => $request->state_id,
            'category_id'       => $request->category_id,
            'title'             => $request->title,
            'type'              => $request->type,
            'slug'              => Str::slug($request->title),
            'short_description'  => $request->short_description,
            'content'           => $request->content,
            'author'            => Auth::user()->name,
            'date'              => $request->date ?? Carbon::now(),
            'featured_image'    => 'backend/news/' . $featurename,
            'thumnail_image'    => 'backend/news/' . $thumnailname,
            'tags'              => $request->tags ?? '',
            'status'            => $request->status ?? 0,
            'created_at'        => Carbon::now(),
        ]);

        logActivity('Create', "Added a new news article: {$request->title}", 'News', $id);
        
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

        // Step 1: Basic validation
        $validatedData = $request->validate([
            'title'             => 'required|string|max:255',
            'content'           => 'required',
            'division_id'       => 'required',
            'district_id'       => 'required',
            'state_id'          => 'required',
            'category_id'       => 'required',
            'short_description' => 'required',
            'featured_image'    => 'nullable|image|mimes:png,jpg,jpeg,gif,webp',
            'thumnail_image'    => 'nullable|image|mimes:png,jpg,jpeg,gif,webp',
        ]);

        // Step 2: Manually check image presence if no file and no old image
        if (!$request->hasFile('thumnail_image') && !$news->thumnail_image) {
            return back()->withErrors(['thumnail_image' => 'Thumbnail image is required.'])->withInput();
        }

        if (!$request->hasFile('featured_image') && !$news->featured_image) {
            return back()->withErrors(['featured_image' => 'Featured image is required.'])->withInput();
        }

        // Step 3: Update images if new ones are uploaded
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

        // Step 4: Update remaining fields
        $news->user_id = Auth::user()->id;
        $news->division_id = $request->division_id;
        $news->district_id = $request->district_id;
        $news->state_id  = $request->state_id;
        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->type = $request->type;
        $news->slug  = Str::slug($request->title);
        $news->short_description  = $request->short_description;
        $news->content = $request->content;
        $news->author = Auth::user()->name;
        $news->date  = $request->date ?? Carbon::now();
        $news->tags  = $request->tags ?? '';
        $news->status = $request->status ?? 0;
        $news->updated_at = Carbon::now();

        $news->save();

        logActivity('Update', "Updated the news article: {$request->title}", 'News', $id);

        $notification = array(
            'message' => 'News Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function getData()
{
    $blogs = News::with('category'); // eager load category

    return DataTables::of($blogs)
        ->addIndexColumn()
        ->addColumn('category', function ($blog) {
            return $blog->category->name ?? 'N/A';
        })
        ->addColumn('featured_image', function ($blog) {
            return '<img src="' . asset($blog->featured_image) . '" width="60" height="60" class="rounded" />';
        })
        ->addColumn('thumnail_image', function ($blog) {
            return '<img src="' . asset($blog->thumnail_image) . '" width="60" height="60" class="rounded" />';
        })
        ->addColumn('status', function ($blog) {
            return $blog->status == 1
                ? '<span class="badge bg-success">Active</span>'
                : '<span class="badge bg-danger">Inactive</span>';
        })
        ->addColumn('action', function ($blog) {
            $edit = route('edit.blog', $blog->id);
            $delete = route('delete.blog', $blog->id);

            return '
            <div class="d-flex gap-2">
                <a href="' . $edit . '" class="btn btn-sm btn-success" title="Edit">
                    <i class="ti ti-edit"></i>
                </a>
                <a href="' . $delete . '" class="btn btn-sm btn-danger" title="Delete" id="delete">
                    <i class="ti ti-trash"></i>
                </a>
            </div>
        ';
        })
        ->rawColumns(['featured_image', 'thumnail_image', 'status', 'action']) // important!
        ->make(true);
}
}
