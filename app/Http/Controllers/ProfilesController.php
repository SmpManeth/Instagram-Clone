<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function profile(User $user)
    {
       
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
