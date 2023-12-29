@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
    <div class="row mt-5">
        <div class="col-md-8">
            @foreach ($company->jobs as $job)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <p class="card-text">Location: {{ $job->address }}</p>
                        <p class="card-text">Salary: <span class="fw-bold">₱{{ number_format($job->salary, 2) }} per
                                month</span></p>
                        <a href="{{ route('job.show', [$job->slug]) }}" class="btn btn-dark">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
