<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Emails;
use App\Models\Feature;
use App\Models\HeroSection;
use App\Models\Newsletter;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Permission;

class BackendController extends Controller
{

    public function settings()
    {

        $setting = Setting::find(1);

        return view('backend.settings',  compact('setting'));
    }
    public function update(Request $request)
    {
        $request->merge([
            'title' => strip_tags($request->title),
            'promo_title' => strip_tags($request->promo_title),
        ]);
        $request->validate([
            'logo'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'favicon'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:100',
            'title'     => 'required|string|max:60',
            'address'   => 'nullable|string|max:100',
            'phone'     => ['nullable', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
            'whats_app' => ['nullable', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
            'email'     => 'required|email|max:255',
            'facebook'  => 'nullable|url',
            'twitter'   => 'nullable|url',
            'youtube'   => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin'  => 'nullable|url',
            'map_link'  => 'nullable|url',
            'promo_title' => 'nullable|string|max:255',
            'promo_desp'  => 'nullable|string|max:1000',
        ], [
            'phone.regex' => 'The phone number must be a valid Bangladeshi number (e.g., 017XXXXXXXX).',
            'whats_app.regex' => 'The WhatsApp number must be a valid Bangladeshi number (e.g., 017XXXXXXXX).',
            'email.email' => 'Please enter a valid email address.',
            'logo.image' => 'The logo must be an image file.',
            'favicon.image' => 'The favicon must be an image file.',
        ]);

        $setting = Setting::find(1);

        if ($request->file('logo')) {
            if (is_file(public_path($setting->logo))) {
                unlink(public_path($setting->logo));
            }

            $image = $request->file('logo');
            $manager = new ImageManager(new Driver());
            $name = 'logo_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/setting/' . $name));

            $setting->logo = 'backend/setting/' . $name;
        }

        if ($request->file('favicon')) {
            if (is_file(public_path($setting->favicon))) {
                unlink(public_path($setting->favicon));
            }

            $image = $request->file('favicon');
            $manager = new ImageManager(new Driver());
            $name = 'favicon_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/setting/' . $name));

            $setting->favicon = 'backend/setting/' . $name;
        }

        $setting->title         = $request->title;
        $setting->address       = $request->address;
        $setting->phone         = $request->phone;
        $setting->email         = $request->email;
        $setting->facebook      = $request->facebook;
        $setting->twitter       = $request->twitter;
        $setting->youtube       = $request->youtube;
        $setting->instagram     = $request->instagram;
        $setting->linkedin      = $request->linkedin;
        $setting->map_link      = $request->map_link;
        $setting->whats_app     = $request->whats_app;
        $setting->promo_title   = $request->promo_title;
        $setting->promo_desp    = $request->promo_desp;

        $setting->save();

        logActivity('Update', 'Updated site settings', 'Site Setting', 1);

        return back()->with('success', 'Settings updated successfully!');
    }

    public function heroSection()
    {
        $data = HeroSection::find(1);
        return view('backend.hero_section', compact('data'));
    }

    public function heroUpdate(Request $request)
    {
        $data = HeroSection::find(1);

        if ($request->file('image')) {

            if (is_file(public_path($data->image))) {
                unlink(public_path($data->image));
            }

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name = 'first_banner_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/home/' . $name));

            $data->image = 'backend/home/' . $name ?? null;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->free_quote = $request->free_quote;
        $data->contact_us = $request->contact_us;
        $data->save();

        return back()->with('success', 'Hero Section Updated Successfully!');
    }

    public function about_us()
    {
        $data = AboutUs::find(1);
        $vision = AboutUs::find(2);
        $mission = AboutUs::find(3);
        return view('backend.about_us', compact(['data', 'vision', 'mission']));
    }
    public function about_us_update(Request $request)
    {
        $data = AboutUs::find(1);

        if ($request->file('image')) {

            if (is_file(public_path($data->image))) {
                unlink(public_path($data->image));
            }

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name = 'about_us_banner_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/home/' . $name));

            $data->image = 'backend/home/' . $name ?? null;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        // $data->service = $request->service;
        $data->link = $request->link;
        $data->save();

        return back()->with('success', 'Hero Section Updated Successfully!');
    }

    public function visionUpdate(Request $request)
    {
        $data = AboutUs::find(2);

        if ($request->file('image')) {

            if (is_file(public_path($data->image))) {
                unlink(public_path($data->image));
            }

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name = 'our_vision_banner_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/home/' . $name));

            $data->image = 'backend/home/' . $name ?? null;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('vision', 'Vision Content Updated Successfully!');
    }

    public function missionUpdate(Request $request)
    {
        $data = AboutUs::find(3);

        if ($request->file('image')) {

            if (is_file(public_path($data->image))) {
                unlink(public_path($data->image));
            }

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name = 'our_mission_banner_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/home/' . $name));

            $data->image = 'backend/home/' . $name ?? null;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('mission', 'Mission Content Updated Successfully!');
    }

    public function newsletter(Request $request)
    {
        if ($request->ajax()) {
            $emails = Emails::select(['id', 'email']);
            return DataTables::of($emails)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('delete.newsletter', $row->id) . '" class="btn btn-sm btn-danger">
                                <i class="ti ti-trash"></i>
                            </a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.newsletter');
    }
    public function newsletter_update(Request $request)
    {
        $data = Newsletter::find(1);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('success', 'Newsletter Section Updated Successfully!');
    }
    public function newsletter_delete($id)
    {

        Emails::find($id)->delete();

        return back()->with('succsess', 'Email Deleted Successfully');
    }
    public function description(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'description'  => 'required|string|max:500',
        ]);

        $data = Description::find($id);
        $exists = Description::find($id);

        if (!$data) {
            $data = new Description();
            $data->id = $id;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        logActivity(($exists ? "Updated" : "Created"), "{$request->title} : {$request->description}", 'Section Content', $id);

        $notification = array(
            'message' => ($exists ? "Section Updated Successfully!" : "Section Created Successfully!"),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function userList()
    {
        $roles = Role::all();
        $users = User::all();
        return view('backend.user', compact('users', 'roles'));
    }
    public function registerByAdmin(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required|in:admin,editor,user',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Process image if uploaded
        $imagePath = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $imageName = 'users_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/users/' . $imageName));
            $imagePath = 'backend/users/' . $imageName;
        }

        // Create user
        $id = User::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'image' => $imagePath,
        ]);
        $user = User::findOrFail($id);

        if ($request->role) {
            $user->assignRole($request->role);
        }
        logActivity('Create', "Added a new user: {$request->name} ({$request->email})", 'User', $id);

        return back()->with('success', 'User registered successfully');
    }

    public function userUpdateByAdmin(Request $request, $id)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'role' => 'required|in:admin,editor,user',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = User::find($id);
        // Process image if uploaded
        if ($request->file('image')) {

            if ($user->image) {
                if (file_exists(public_path($user->image))) {
                    unlink(public_path($user->image));
                }
            }

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $imageName = 'users_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/users/' . $imageName));
            $imagePath = 'backend/users/' . $imageName;

            $user->image = $imagePath;
        }

        $user->name = $request->name;
        $user->role = $request->role;
        $user->save();
         $user->roles()->detach();
        if ($request->role) {
            $user->assignRole($request->role);
        }
        logActivity('Update', "Updated user profile: {$request->name}", 'User', $id);

        return back()->with('success', 'User Updated successfully');
    }
    public function userDeleteByAdmin($id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'User not found');
        }

        // Prevent deletion if the user is currently logged in
        if (Auth::check() && Auth::id() == $user->id) {
            return back()->with('error', 'You cannot delete yourself');
        }

        // Delete user image if exists
        if ($user->image) {
            if (file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
        }

        logActivity('Delete', "Deleted user: {$user->name} ({$user->email}", 'User', $id);

        $user->delete();
        return back()->with('success', 'User deleted successfully');
    }
}
