<?php

use App\Models\Description;
use App\Models\Newsletter;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;

if (!function_exists('settings')) {
    function settings() {
        return Setting::first();
    }
}
function description($id) {
    return Description::find($id);
}
function services($limit) {
    return Service::take($limit)->get();
}
function newsletter() {
    return Newsletter::find(1); 
}

