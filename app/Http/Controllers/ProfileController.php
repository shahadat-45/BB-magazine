<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */    
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());
    
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
    
        // Handle image upload
        if ($request->file('image')) {
            // Delete old image if exists
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
    
        $user->save();
    
        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
