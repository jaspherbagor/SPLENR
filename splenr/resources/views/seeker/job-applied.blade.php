@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 py-5">
    <div class="mt-5 px-1 align-items-center">
        <h2 class="fw-bolder mb-5 mt-3 text-center">APPLIED JOBS</h2>
        @if(count(auth()->user()->listings) > 0)
            @foreach ($users as $user)
            <div class="row">
                @foreach($user->listings as $listing )
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $listing->title }}</h5>
                            <p class="card-text">Applied: {{ $listing->pivot->created_at->format('F j, Y') }}</p>
                            <a href="{{ route('job.show', [$listing->slug]) }}" class="btn btn-dark">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        @else
        <p class="text-center fw-bolder">No jobs applied yet.</p>
        @endif
    </div>
</div>

@include('layouts.footer')

@endsection
