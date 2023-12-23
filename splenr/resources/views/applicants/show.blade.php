@extends('layouts.admin.main')

@section('content')

<div class="container mt-3 px-4">
    <div class="row">
        <div class="col-md-10 my-4">
            <h2 class="fw-bolder">{{ $listing->title }}</h2>
        </div>
        @foreach($listing->users as $user)
            <div class="card mt-5">
                <div class="row g-0">
                    
                    <div class="col-auto">
                        @if($user->profile_pic)
                        <img src="{{ Storage::url($user->profile_pic) }}" alt="Profile Picture" class="rounded-circle profile-image" >
                        @else 
                        <img src="https://placehold.co/400" alt="Profile Picture" class="rounded-circle profile-image" >

                        @endif
                    </div>
                    <div class="col-auto">
                        <div class="card-body">
                            <p class=="fw-bold">{{ $user->name }}</p>
                            <p class="card-text">{{ $user->email }}</p>
                            <p class="card-text">{{ $user->created_at }}</p>
                        </div>
                    </div>
                    <div class="col-auto ms-auto align-self-center">
                        <a href="{{ Storage::url($user->resume) }}" class="btn btn-warning" target="_blank">Download Resume</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .profile-image {
        width:150px
    }
</style>

@endsection