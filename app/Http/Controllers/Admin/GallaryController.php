<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class GallaryController extends Controller
{
    public function galleryList(Request $request)
    {
        if ($request->ajax()) {
            $galleries = Gallery::select(['id', 'gallary_image', 'created_at', 'status']);

            return DataTables::of($galleries)
                ->addIndexColumn()
                ->editColumn('gallary_image', function ($row) {
                    return '<img class="rounded" src="' . asset($row->gallary_image) . '" height="60px" width="60px">';
                })
                ->editColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->timezone('Asia/Dhaka')->format('d M Y h:i A');
                })
                ->addColumn('action', function ($row) {
                    $statusIcon = $row->status == 1 ? 'ti-circle-check' : 'ti-circle-x';
                    $buttonColor = $row->status == 1 ? 'btn-success' : 'btn-dark';

                    return '<button class="btn btn-sm p-1 '.$buttonColor.' status-toggle" data-id="' . $row->id . '">
                                <i style="font-size: 18px;" class="ti ' . $statusIcon . '"></i>
                            </button>
                            <a href="'.route('gallery.delete', $row->id).'" title="Delete" id="delete">
                                <button class="btn btn-sm p-1 btn-danger ms-1"><i style="font-size: 18px;" class="ti ti-trash"></i></button>
                            </a>';
                })
                ->rawColumns(['gallary_image', 'action'])
                ->make(true);
        }

        return view("backend.gallary.gallary_list");
    }

    public function toggleStatus(Request $request)
    {
        $gallery = Gallery::find($request->id);
        if ($gallery) {
            $gallery->status = !$gallery->status; // Toggle between 0 and 1
            $gallery->save();
            return response()->json(['success' => true, 'status' => $gallery->status]);
        }

        return response()->json(['success' => false], 400);
    }

    public function galleryStore(Request $request)
    {
        $request->validate([
            'gallary_image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);

        if ($request->file('gallary_image')) {
            $image = $request->file('gallary_image');
            $manager = new ImageManager(new Driver());
            $imageName = 'gallary_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/gallary/' . $imageName));  
            $imagePath = 'backend/gallary/' . $imageName; 
        }
        $id = Gallery::insertGetId([
            'gallary_image' => $imagePath,
            'created_at' => Carbon::now(),
        ]);

        logActivity('Create', "Added a new gallery image", 'Gallery', $id);
        
        $notification = array(
            'message' => 'Gallery Image Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method

    public function galleryDelete($id)
    {

        $item = Gallery::find($id);
        $img = $item->gallary_image;

        unlink($img);

        logActivity('Delete', "Deleted gallery image", 'Gallery', $id);

        $item->delete();

        $notification = array(
            'message' => 'Gallery Image Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    } // End Method

}
