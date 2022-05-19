@extends('layouts.app')

@section('content')
<div class="container profile">
    <div class="row">
        <div class="col-3 pt-5 mt-1">
            <img src="https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/280278152_752424762425928_1049722008687008167_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-6&_nc_sid=da31f3&_nc_ohc=ugyToJBWTo8AX_E8pHt&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT9yHCUaFHTyS6HHsMKBv7LZDFU-jngxDOeaIYjalmaBag&oe=6289648F" class="rounded-circle" alt="Profile Picture">
        </div>
        <div class="col-9 pt-5 ps-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">

                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>

                </div>
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                <div class="d-flex">

                    <div class="pe-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
                    <div class="pe-5"><strong>1,360</strong> followers</div>
                    <div class="pe-5"><strong>436</strong> following</div>
                </div>
                <div class="pt-3">
                    <strong>{{ $user->name }}</strong>
                </div>
                <div class="text-muted">
                    Digital creator
                </div>
                <div>
                    {{ $user->profile->bio ?? " "}}
                </div>
                <div class="fw-bold">
                    <a class="text-decoration-none" href="https://{{ $user->profile->website ?? ' '}}">{{ $user->profile->website ?? " "}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id}}"><img class="w-100 " src="/storage/{{ $post->image }}" alt=""></a>
        </div>
        @endforeach
    </div>

</div>
@endsection