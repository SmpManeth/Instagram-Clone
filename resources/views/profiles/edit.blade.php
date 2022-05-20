@extends('layouts.app')

@section('content')
<div class="container profile">

    <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">Profile Picture</label>
            <div class="col-md-6">
                <input type="file" name="image" id="image" class="form-control-file form-control @error('image') is-invalid @enderror">

                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $user->username}}" autocomplete="username">

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>

            <div class="col-md-6">
                <input id="bio" type="bio" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') ?? $user->profile->bio ?? ' ' }}" autocomplete="bio">

                @error('bio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="website" class="col-md-4 col-form-label text-md-end">{{ __('Website') }}</label>

            <div class="col-md-6">
                <input id="website" type="website" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') ?? $user->profile->website ?? ' ' }}" autocomplete="website">

                @error('website')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="row mb-3">
            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

            <div class="col-md-6">
                <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" required>
                    <option value="{{ old('category') ?? $user->profile->category }}" selected>{{ old('category') ?? $user->profile->category }}</option>
                    <option value="Personal_blog">Personal blog</option>
                    <option value="Product">Product/service</option>
                    <option value="Art">Art</option>
                    <option value="Musician">Musician/band</option>
                    <option value="Shopping">Shopping & retail</option>
                    <option value="Health">Health/beauty</option>
                    <option value="Grocery">Grocery Store</option>
                    <option value="Digital">Digital Creater</option>
                </select>


                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        <div class="row mb-3">
            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

            <div class="col-md-6">
                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                    <option value="{{ old('gender') ?? $user->profile->gender }}" selected>{{ old('gender') ?? $user->profile->gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>


                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->profile->phone ?? ' ' }}" autocomplete="phone">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Done') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection