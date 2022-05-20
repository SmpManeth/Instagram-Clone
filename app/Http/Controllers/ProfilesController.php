<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function profile(\App\Models\User $user)
    {

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {

        $profile = request()->validate([
            'bio' => '',
            'website' => '',
            'gender' => '',
            'category' => '',
            'phone' => '',
            'image' => '',

        ]);

        $data = request()->validate([
            'name' => 'required',
            'username' => 'required',
        ]);


        if (isset($user->profile)) {

            auth()->$user->profile->update($profile);
            auth()->$user->update($data);
            return redirect("/profile/{$user->id}");
        } else {
            if (!isset($profile['image'])) {
                Profile::create([

                    'bio' => $profile['bio'],
                    'website' => $profile['website'],
                    'gender' => $profile['gender'],
                    'category' => $profile['category'],
                    'phone' => $profile['phone'],
                    'user_id' => $user->id,
                ]);
            } else {
                Profile::create([

                    'bio' => $profile['bio'],
                    'website' => $profile['website'],
                    'gender' => $profile['gender'],
                    'category' => $profile['category'],
                    'phone' => $profile['phone'],
                    'image' =>$profile['image'],
                    'user_id' => $user->id,
                ]);
            }

            auth()->$user->update($data);
            return redirect("/profile/{$user->id}");
        }
    }
}
