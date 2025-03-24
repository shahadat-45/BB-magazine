<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Emails;
use App\Models\Feature;
use App\Models\HeroSection;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function index(Request $request){

        return 'Okk';
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
