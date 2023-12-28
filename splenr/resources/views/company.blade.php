@extends('layouts.app')

@section('content')

<div class="container px-4 py-5">
  <div class="row justify-content-center mt-5">
    <div class="col">
      <div class="hero-section">
        <!-- <img src="" style="width: 100%; height:250px;"> -->
      </div>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col">
      <img src="{{ Storage::url($company->profile_pic) }}" width="60" height="60" class="rounded-circle" alt="Company Logo" class="img-fluid">
      <h2>{{ $company->name }}</h2>
      <p>{{ $company->address }}</p>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col">
      <h3>About</h3>
      {{ $company->about }}
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium eleifend erat id finibus. Donec tristique purus vitae urna varius, sed laoreet nisl efficitur.</p>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col-md-8">
      <h3>List of Jobs</h3>
      
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Job Title 1</h5>
          <p class="card-text">Location: </p>
          <p class="card-text">Salary: $5000 per year</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>      
    </div>
  </div>
</div>
<style>
    .hero-section{ 
        background-color:#f5f5f5;
        width:100%;
        height:200px;
    }
</style>
@endsection