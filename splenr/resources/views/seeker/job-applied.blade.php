@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 py-5">
    <div class="mt-5 align-items-center">
        <h2 class="fw-bolder mb-4 text-center">APPLIED JOBS</h2>
        <div class="container">
            @foreach ($users as $user)
                @foreach($user->listings as $listing )
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $listing->title }}</h5>
                        <p class="card-text">Applied: {{ $listing->pivot->created_at }}</p>
                        <a href="{{ route('job.show', [$listing->slug]) }}" class="btn btn-dark">View</a>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection
