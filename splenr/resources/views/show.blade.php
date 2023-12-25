@extends('layouts.app')

@section('content')
<div class="container py-5 px-4">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <img src="{{ Storage::url($listing->feature_image) }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">{{ $listing->title }}</h2>
                    <span class="badge bg-primary">{{ $listing->job_type }}</span>
                    <p class="mt-3">Salary: <span class="fw-bold">₱{{ number_format($listing->salary,2) }}</span></p>
                    <p>Address: <span class="fw-bold">{{ $listing->address }}</span></p>
                    <h4 class="mt-4">Description</h4>
                    <p class="card-text">{!! $listing->description !!}</p>
                    <h4>Roles and Responsibilities</h4>
                    {!! $listing->roles !!}
                    <p class="card-text mt-4">Application Closing Date: <span class="fw-bold">{{ $listing->application_close_date }}</span></p>
                    <a href="#" class="btn btn-primary mt-3">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection