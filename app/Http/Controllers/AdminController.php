<?php

namespace App\Http\Controllers;

use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager; 
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    
}
