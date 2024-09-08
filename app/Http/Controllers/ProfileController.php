<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    // Show the profile form
    public function show()
    {
        $profile = Auth::user()->profile;

        // If the profile does not exist, create an empty profile
        if (!$profile) {
            $profile = new Profile();
            $profile->name = Auth::user()->name;
            $profile->email = Auth::user()->email;
        }

        return view('profile', compact('profile'));
    }
    
    // Handle avatar upload
 public function updateAvatar(Request $request)
{
    $request->validate([
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();
    
    if ($request->hasFile('avatar')) {
        // Delete old avatar if it exists
        if ($user->avatar && Storage::exists('public/avatars/' . $user->avatar)) {
            Storage::delete('public/avatars/' . $user->avatar);
        }
        
        // Store new avatar
        $avatar = $request->file('avatar');
        $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
        $avatar->storeAs('public/avatars', $avatarName);
        
        // Update user avatar
        $user->avatar = $avatarName;
        $user->save();
    }

    return redirect()->back()->with('success', 'Avatar updated successfully.');
}
}