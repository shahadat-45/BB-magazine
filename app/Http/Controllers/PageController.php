<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\HeroSection;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs(){
        $setting = Setting::find(1);
        $about_us = AboutUs::find(1); 
        $vision = AboutUs::find(2);
        $mission = AboutUs::find(3);
        $newsletter = Newsletter::find(1);                 
        $teams = Team::take(6)->get();
        
        return view('frontend.about' , compact(['about_us', 'newsletter' , 'teams', 'setting', 'vision' , 'mission']));
        
    }
    public function service(){
        $services = Service::all();
        return view('frontend.service', compact('services'));
    }
    public function serviceDetails($id){
        $services = Service::all();
        $service = Service::find($id);
        return view('frontend.service-details', compact(['service' , 'services']));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function ourTeam(){
        $teams = Team::take(3)->get();
        return view('frontend.team', compact('teams'));
    }
    public function testimonial(){
        $testimonials = Testimonial::all();
        return view('frontend.testimonial', compact('testimonials'));
    }
    public function portfolioDetails($id){
        $portfolio = Project::find($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }
    public function project(){
        $projects = Project::all();
        $projectCategory = Project::selectRaw('category, MAX(id) as id')
                            ->groupBy('category')                            
                            ->get();
        return view('frontend.project' , compact(['projects' , 'projectCategory']));
    }
    public function pricing(){

        $pricing = Pricing::all();

        return view('frontend.pricing.pricing' , compact('pricing'));
    }
    public function checkout($id){

        $data = Pricing::find($id);

        return view('frontend.components.checkout' , compact('data'));
    }

}
