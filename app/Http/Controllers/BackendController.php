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
use Carbon\Carbon;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BackendController extends Controller
{
    
    public function settings(){

        $setting = Setting::find(1);

        return view('backend.settings' ,  compact('setting'));
    }
    public function update(Request $request)
    {
        
        $setting = Setting::find(1);

        if ( $request->file('logo')) {
            
            if (is_file(public_path($setting->dark_logo))) {
                unlink(public_path($setting->dark_logo));
            }

            $image = $request->file('logo');  
            $manager = new ImageManager(new Driver());
            $name = 'logo_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/setting/' . $name));

            $setting->logo = 'backend/setting/' . $name ?? null;
        }

        if ( $request->file('dark_logo')) {
            
            if (is_file(public_path($setting->dark_logo))) {
                unlink(public_path($setting->dark_logo));
            }

            $image = $request->file('dark_logo');  
            $manager = new ImageManager(new Driver());
            $name = 'dark_logo_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/setting/' . $name));

            $setting->dark_logo = 'backend/setting/' . $name ?? null;
        }

        if ( $request->file('favicon')) {
            
            if (is_file(public_path($setting->dark_logo))) {
                unlink(public_path($setting->dark_logo));
            }

            $image = $request->file('favicon');  
            $manager = new ImageManager(new Driver());
            $name = 'favicon_' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->save(public_path('backend/setting/' . $name));

            $setting->favicon = 'backend/setting/' . $name ?? null;
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
        $setting->projects      = $request->projects;
        $setting->clients       = $request->clients;
        $setting->support       = $request->support;
        $setting->workers       = $request->workers;
        $setting->whats_app     = $request->whats_app;
        
        $setting->promo_title = $request->promo_title;
        $setting->promo_desp = $request->promo_desp;
        $setting->save();

        return back()->with('success', 'Settings updated successfully!');
    }
    public function heroSection(){
        $data = HeroSection::find(1);
        return view('backend.hero_section', compact('data'));
    }

    public function heroUpdate(Request $request){
        $data = HeroSection::find(1);

        if ( $request->file('image')) {
            
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
    
    public function about_us(){
        $data = AboutUs::find(1);
        $vision = AboutUs::find(2);
        $mission = AboutUs::find(3);
        return view('backend.about_us', compact(['data' , 'vision' , 'mission']));
    }
    public function about_us_update(Request $request){
        $data = AboutUs::find(1);

        if ( $request->file('image')) {
            
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

    public function visionUpdate(Request $request){
        $data = AboutUs::find(2);

        if ( $request->file('image')) {
            
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

    public function missionUpdate(Request $request){
        $data = AboutUs::find(3);

        if ( $request->file('image')) {
            
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
    
    public function newsletter(){
        $data = Newsletter::find(1);
        $emails = Emails::paginate(10);
        $contacts = Contact::paginate(10);
        return view('backend.newsletter', compact(['data' , 'emails' , 'contacts']));
    }
    public function newsletter_update(Request $request){
        $data = Newsletter::find(1);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return back()->with('success', 'Newsletter Section Updated Successfully!');
    }
    public function newsletter_delete($id){

        Emails::find($id)->delete();

        return back()->with('succsess' , 'Email Deleted Successfully');
    }
    public function description(Request $request, $id = null)
    {
        $data = Description::find($id);
        $exists = Description::find($id);
    
        if (!$data) {            
            $data = new Description();
            $data->id = $id;
        }
    
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
            
        return back()->with([
            'content' => ($exists ? "Section Updated Successfully!" : "Section Created Successfully!"),
        ]);
    }
}
