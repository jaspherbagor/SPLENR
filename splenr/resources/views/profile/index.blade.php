@extends('layouts.admin.main')

@section('content')

<div class="container-fluid mt-5 px-4">
    <div class="row justify-content-center">

        <form action="{{ route('user.update.profile') }}" method="post">@csrf
            <div class="col-md-10">
                <div class="form-group mb-4">
                    <label for="logo">Logo</label>
                    <input type="file" id="logo" name="profile_pic" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Company Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection