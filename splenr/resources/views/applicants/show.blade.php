@extends('layouts.admin.main')

@section('content')

<div class="container mt-3 px-4">
    <div class="row">
        <div class="col-md-10 mt-3 mb-2">
            <p class="fw-medium fs-2">Job Title: &nbsp<span class="fw-bolder fs-2">{{ $listing->title }}</span></p>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
        </div>
        @foreach($listing->users as $user)
            <div class="card mt-3 py-2 my-0 {{ $user->pivot->shortlisted ? 'card-bg' : '' }}">
                <div class="row g-0">
                    
                    <div class="col-md-3 d-flex align-items-center justify-content-start">
                        @if($user->profile_pic)
                        <img src="{{ Storage::url($user->profile_pic) }}" alt="Profile Picture" class="rounded-circle profile-image" >
                        @else 
                        <img src="https://placehold.co/400" alt="Profile Picture" class="rounded-circle profile-image" >

                        @endif
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-start">
                        <div class="card-body">
                            <p class="card-text py-0 my-1">Name: <span class="fw-bolder">{{ $user->name }}</span></p>
                            <p class="card-text py-0 my-1">Email: <span class="fw-bolder">{{ $user->email }}</span></p>
                            <p class="card-text py-0 my-1">Applied on: <span class="fw-bolder">{{ $user->pivot->created_at }}</span></p>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center justify-content-end">
                        <form action="{{ route('applicants.shortlist', [$listing->id, $user->id]) }}" method="post">@csrf
                            <a href="{{ Storage::url($user->resume) }}" class="btn btn-warning my-2 me-2" target="_blank">Download Resume</a>
                            <button type="submit" class="{{ $user->pivot->shortlisted ? 'btn btn-success' : 'btn btn-dark' }}">
                                {{ $user->pivot->shortlisted ? 'Shortlisted' : 'Shortlist' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .profile-image {
        height:100px
    }

    .card-bg {
        background: rgb(53, 249, 53)
    }
</style>

@endsection