@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
  <div class="row justify-content-center mt-5">
    <div class="col">
      <div class="hero-section">
      </div>
    </div>
  </div>
  
  <div class=" mt-5">
    <div class="col">
      <img src="{{ Storage::url($company->profile_pic) }}"
       width="60" height="60" class="rounded-circle" alt="Company Logo" class="img-fluid">
      <h2 class="fw-bolder">{{ $company->name }}</h2>
      <p>{{ $company->address }}</p>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col">
      <h3 class="fw-bolder">ABOUT</h3>
      {!! $company->about !!}
    </div>
  </div>

  <h3 class="fw-bolder mt-4">JOB POSTINGS</h3>
  
  <div class="row mt-3">
    <div class="col-md-8">
        @foreach($company->jobs as $job)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $job->title }}</h5>
                <p class="card-text">Location: {{ $job->address }}</p>
                <p class="card-text">
                  Salary:
                  <span class="fw-bold">
                    ₱{{ number_format($job->salary, 2) }} per month
                  </span>
                </p>
                <a href="{{ route('job.show', [$job->slug]) }}" class="btn btn-dark">View</a>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
<style>
  .hero-section {
    background-color:#f5f5f5;
    width:100%;
    height:200px;
  }
</style>
@endsection
