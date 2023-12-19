@extends('layouts.admin.main')

@section('content')

<div class="container-fluid mt-5 px-4">
    <div class="row justify-content-center">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <form action="{{ route('user.update.profile') }}" method="post" enctype="multipart/form-data">@csrf
            <div class="col-md-10">
                <div class="form-group mb-4">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="profile_pic" class="form-control">
                    @if(auth()->user()->profile_pic)
                    <img src="{{ Storage::url(auth()->user()->profile_pic) }}" width="150" class="mt-3" alt="profile image">
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label for="name">Company Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ auth()->user()->name }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection