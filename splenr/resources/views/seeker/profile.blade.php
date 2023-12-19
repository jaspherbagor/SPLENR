@extends('layouts.app')

@section('content')

<div class="container-fluid py-5 px-4">
    <div class="mt-5 row justify-content-center">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <form action="{{ route('user.update.profile') }}" method="post" enctype="multipart/form-data">@csrf
            <div class="col-md-10">
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
    </div>
</div>

@endsection