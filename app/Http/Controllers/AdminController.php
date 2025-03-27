<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
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
                    return '<span class="badge bg-primary">' . e($row->action) . '</span>';
                })
                ->addColumn('log_name', function ($row) {
                    return $row->log_name ?? 'N/A';
                })
                ->addColumn('description', function ($row) {
                    return Str::limit($row->description , 50);
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

}
