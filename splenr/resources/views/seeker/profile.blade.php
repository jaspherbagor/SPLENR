@extends('layouts.app')

@section('content')

<div class="container-fluid py-5 px-4 container-fluid d-flex align-items-center justify-content-center">
    <div class="mt-5 container row justify-content-center">
        @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        <h2 class="fw-bolder mt-4 mb-4">Update Your Profile</h2>
        <form action="{{ route('user.update.profile') }}" method="post" enctype="multipart/form-data" class="">@csrf
            <div class="container">
                <div class="form-group mb-4">
                    <label for="name">Profile Image</label>
                    <input type="file" id="name" name="profile_pic" class="form-control">
                    @if(auth()->user()->profile_pic)
                    <img src="{{ Storage::url(auth()->user()->profile_pic) }}" width="150" class="mt-3" alt="profile image">
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ auth()->user()->name }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>

        <h2 class="fw-bolder mt-5 mb-4">Change Your Password</h2>

        <form action="{{ route('user.changepassword') }}" method="post" class="w-100">@csrf
            <div class="container">
                <div class="form-group mb-4">
                    <label for="name">Current Password </label>
                    <input type="password" name="current_password" class="form-control">
                    @if($errors->has('current_password'))
                        <span class="text-danger">{{ $errors->first('current_password') }}</span>
                    @endif  
                    
                </div>
                <div class="form-group mb-4">
                    <label for="name">New Password</label>
                    <input type="password" name="password" class="form-control">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif  
                </div>
                <div class="form-group mb-4">
                    <label for="name">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @if($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif  
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>

        <h2 class="fw-bolder mt-5 mb-4">Update Your Resume</h2>

        <form action="#" method="post" class="w-100">@csrf
            <div class="container">
                <div class="form-group mb-4">
                    <label for="resume">Upload a Resume </label>
                    <input type="file" name="resume" class="form-control" id="resume">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        
    </div>
        
</div>

<style>
    input[type='password'], input[type=text], input[type=file] {
        border: 2px solid black
    }
</style>

@endsection