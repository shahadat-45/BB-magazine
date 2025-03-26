<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Emails;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\HeroSection;
use App\Models\News;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Carbon\Carbon;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function index(Request $request){
        $heroSliders = News::select('title', 'slug', 'thumnail_image', 'short_description')
            ->where('status', 1)
            ->latest()
            ->take(4)
            ->get();
        $latestUpdates = News::where('status', 1)
            ->latest()
            ->take(10)
            ->get(['id', 'title', 'slug']);
        $latestNews = News::select('id', 'title', 'slug', 'thumnail_image')
            ->where('status', 1)
            ->take(6)
            ->get();
        $dates = News::select('date')->get()->map(function ($news) {
                return Carbon::parse($news->date)->format('M, Y');
            })->toArray();
        $magazines = News::where('type' , 'magazine')->latest()->take(4)->get();    
        $popularNews = News::select('id', 'title', 'slug', 'author', 'read_count')
            ->where('status', 1)
            ->orderBy('read_count', 'desc')
            ->take(4)
            ->get();
        $articleCategories = BlogCategory::where('status', 1)
            ->latest()
            ->take(4)
            ->get();
        $galleryImages = Gallery::latest()
            ->take(6)
            ->get();
        return view('frontend.home-page' , compact(['heroSliders' , 'latestUpdates' , 'latestNews' , 'dates' , 'magazines' , 'popularNews' , 'articleCategories' , 'galleryImages']));
    }
    public function underConstruction(){
        return view('frontend.layouts.under-construction');
    }
    public function newsletter_store(Request $request){

        $validator = Validator::make($request->all(), [
            'newsletter_email'   => 'required|email|max:255',
        ],
        [
            'newsletter_email.required' => 'Email is required!',
            'newsletter_email.email' => 'Please enter a valid email!',
        ]
        );

        if ($validator->fails()) {
            return redirect()->to(url('/#footer'))
                ->withErrors($validator)
                ->withInput();
        }

        Emails::create(['email' => $request->newsletter_email]);
        
        return redirect()->to(url('/#footer'))->with('footer', 'Subscription successful!');
    }
    public function storeContact(Request $request)
    {
        // Custom validation logic
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->to(url('/#support'))
                ->withErrors($validator)
                ->withInput();
        }

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect to #contact section with success message
        return redirect()->to(url('/#support'))->with('contact', 'Your message has been sent successfully!');
    }
}
