<?php

use App\Models\ActivityLog;
use App\Models\Description;
use App\Models\Newsletter;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

if (!function_exists('settings')) {
    function settings() {
        return Setting::first();
    }
}
function description($id) {
    return Description::find($id);
}

function logActivity($action, $description, $log_name = null, $target_id = null)
{
    ActivityLog::create([
        'user_id' => Auth::id(),
        'action' => $action,
        'description' => $description,
        'log_name' => $log_name,
        'target_id' => $target_id,
        'ip_address' => request()->ip(),
        'user_agent' => request()->userAgent(),
    ]);
}

