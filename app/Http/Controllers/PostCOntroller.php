<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostCOntroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200); //fit image to the square

        $image->save();
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }


    public function show(\App\Models\Post $post)
    {
        $user = User::findOrFail($post['user_id']);

        return view('posts/show', compact('post','user'));
    }
}
