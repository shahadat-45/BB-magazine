<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\BlogCategory;
use App\Models\Emails;
use App\Models\News;
use App\Models\Newsletter;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        $newsletters = Emails::all();
        $magazins = News::where('type','magazine')->get();
        $news = News::where('type','news')->get();
        $users = User::all();
        return view('backend.index',compact('newsletters','magazins','news','users'));
    }
    public function activityLog(){

        return view('backend.activity_log');
    }

    // Fetch activity logs as JSON for DataTables
    public function getActivityLogs(Request $request)
    {
        if ($request->ajax()) {
            $query = ActivityLog::with('user')->latest();

            return DataTables::of($query)
                ->addColumn('user', function ($row) {
                    return $row->user ? $row->user->name : 'Unknown User';
                })
                ->addColumn('action', function ($row) {
                    return '<span class="badge bg-light-golden">' . ($row->action) . '</span>';
                })
                ->addColumn('log_name', function ($row) {
                    return $row->log_name ?? 'N/A';
                })
                ->addColumn('description', function ($row) {
                    return Str::limit($row->description , 80);
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->addColumn('action_buttons', function ($row) {
                    return '<button class="btn btn-danger btn-sm delete-btn" data-id="' . $row->id . '">Delete</button>';
                })
                ->rawColumns(['action', 'log_name', 'action_buttons'])
                ->make(true);
        }
    }
    // Delete an activity log
    public function delete($id)
    {
        $activity = ActivityLog::findOrFail($id);
        $activity->delete();

        return response()->json(['success' => 'Activity log deleted successfully']);
    }
    public function trash(){        
        return view('backend.blog.blog_trash');
    }
    public function getTrashedData()
    {
        $blogs = News::onlyTrashed()->with('category');

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
            ->addColumn('action', function ($blog) {
                $restore = route('blogs.restore', $blog->id);
                $delete = route('blogs.force.delete', $blog->id);

                return '
                <div class="d-flex gap-2">
                    <a href="' . $restore . '" class="btn btn-sm btn-success" title="Restore">
                        <i class="ti ti-refresh"></i>
                    </a>
                    <a href="' . $delete . '" class="btn btn-sm btn-danger" title="Delete Permanently" id="delete">
                        <i class="ti ti-trash"></i>
                    </a>
                </div>
            ';
            })
            ->rawColumns(['featured_image', 'thumnail_image', 'status', 'action']) // important!
            ->make(true);
    }
    public function restoreNews($id)
    {
        $news = News::withTrashed()->find($id);

        if (!$news) {
            return redirect()->back()->with([
                'message' => 'News not found',
                'alert-type' => 'error'
            ]);
        }

        $news->restore();

        logActivity('Restore', "The article restored : {$news->title}", 'News', $id);

        return redirect()->back()->with([
            'message' => 'News Restored Successfully',
            'alert-type' => 'success'
        ]);
    }
    public function forceDeleteNews($id)
    {
        $item = News::withTrashed()->find($id);

        if (file_exists(public_path($item->thumnail_image))) {
            unlink(public_path($item->thumnail_image));
        }
        if (file_exists(public_path($item->featured_image))) {
            unlink(public_path($item->featured_image));
        }

        logActivity('Delete', "The article deleted permanently : {$item->title}", 'News', $id);
        
        $item->delete();

        $notification = array(
            'message' => 'News Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

}
