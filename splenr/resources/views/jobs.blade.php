@extends('layouts.app')

@section('content')

<section class="container-fluid px-4 py-5 job-listing-section">
    <div class="mt-5">
        <h2 class="fw-bolder text-center my-4">JOB LISTINGS</h2>
        {{-- <div class="container mt-5 mb-3">
            <h2 class="fw-bolder">Find your next employer</h2>
        
            <div class="row">
                @foreach(\App\Models\User::where('user_type','employer')->take(10)->orderBy('id','DESC')->get() as $employer)
                <div class="col-md-4">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> 
                                    @if($employer->profile_pic)
                                   <a href="{{route('company',[$employer->id])}}"><img src="{{Storage::url($employer->profile_pic)}}" width="50"></a>
                                    @else 
                                    <a href="{{route('company',[$employer->id])}}"><img src="icons8-amazon-60.png"></a>
                                    @endif
                                </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0">{{$employer->name}}</h6> <span></span>
                                </div>
                            </div>
                            <div class="badge"> <span>Design</span> </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 filter-column p-3">
                <h4 class="fw-bold mb-4">FILTER JOBS</h4>

                <h5 class="fw-semibold mt-3 mb-2">SALARY</h5>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">HIGH TO LOW</a></li>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">LOW TO HIGH</a></li>
                <hr>

                <h5 class="fw-semibold mt-3 mb-2">DATE</h5>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">OLDEST</a></li>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">LATEST</a></li>
                <hr>

                <h5 class="fw-semibold mt-3 mb-2">JOB TYPE</h5>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">FULLTIME</a></li>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">PARTTIME</a></li>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">CASUAL</a></li>
                <hr>
                <li class="ms-2"><a href="" class="text-decoration-none text-black filter-item fw-medium">CONTRACT</a></li>
                
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 job-listing-column p-2 bg-warning">
                <h2>This is a right column content and layout</h2>

            </div>
        </div>

        <div class="d-flex justify-content-center">

            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle me-1 my-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Salary
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('listing.index', ['sort' => 'salary_high_to_low']) }}">High To Low</a></li>
                  <li><a class="dropdown-item" href="{{ route('listing.index', ['sort' => 'salary_low_to_high']) }}">Low to High</a></li>
                </ul>

                <button class="btn btn-dark dropdown-toggle me-1 my-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Date
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('listing.index', ['date' => 'latest']) }}">Latest</a></li>
                <li><a class="dropdown-item" href="{{ route('listing.index', ['date' => 'oldest']) }}">Oldest</a></li>
                </ul>

                <button class="btn btn-dark dropdown-toggle my-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Job Type
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('listing.index', ['job_type' => 'Fulltime']) }}">Fulltime</a></li>
                <li><a class="dropdown-item" href="{{ route('listing.index', ['job_type' => 'Parttime']) }}">Parttime</a></li>
                <li><a class="dropdown-item" href="{{ route('listing.index', ['job_type' => 'Casual']) }}">Casual</a></li>
                <li><a class="dropdown-item" href="{{ route('listing.index', ['job_type' => 'Contract']) }}">Contract</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-3 g-3">
            @foreach($jobs as $job)
            <div class="col-md-3">
                <div class="card p-2 mt-1 {{ $job->job_type }} ">
                    <div class="text-end">
                        <small class="badge text-bg-info">{{ $job->job_type }}</small>
                    </div>
                    <div class="text-center mt-2 p-3">
                        <img src="{{ Storage::url($job->profile->profile_pic) }}" alt="logo" width="100" class="rounded-circle">
                        <br>
                        <span class="d-block fw-bold">{{ $job->title }}</span>
                        <hr>
                        <span>{{ $job->profile->name }}</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ms-1">{{ $job->address }}</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>₱{{ number_format($job->salary,2) }}</span>
                            <a href="{{ route('job.show', [$job->slug]) }}">
                                <button class="btn btn-dark">Apply</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="container">
            <div class="mt-5">
                <h3>Recent opening</h3>
            </div>
            @foreach(\App\Models\Listing::take(3)->orderBy('id','DESC')->get() as $listing)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex flex-column flex-lg-row">
                     
                        <div class="row flex-fill">
                            <div class="col-sm-5">
                                <h4 class="h5">{{$listing->title}}</h4>
                                <span class="badge bg-secondary">{{$listing->job_type}}</span> <span class="badge bg-success">₱{{number_format($listing->salary,2)}}</span>
                            </div>
                            
                            <div class="col-sm-7 text-lg-end">
                                <a href="{{route('job.show',$listing->slug)}}" class="btn btn-dark stretched-link">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
         
        </div> --}}
    </div>
</section>

@include('layouts.footer')

<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
    * {
        padding:0;
        margin:0;
        box-sizing: border-box;
        list-style:none;
        text-decoration: none;
        border:none;
        outline:none;
        scroll-behavior: smooth;
        font-family:var(--font-family);
        word-wrap: break-word;
    }
    html, body {
        width:100%;
        overflow-x:hidden
    }

    /* Heading 2 & Heading 1 Spacing */
    h2, h1 {
        word-spacing: 10px;
        letter-spacing: 5px;
    }

    /* Paragraph Line Height */
    p {
        line-height: 30px;
    }
    :root {
        --primary-color: #fdd100;
        --navbar-bg: #F5F4F2;
        --text-color-light: #ffffff;
        --text-color-dark: #202020;
        --font-family: sans-serif;
    }

    .filter-column {
        background: var(--navbar-bg);
        border: 1.5px solid var(--text-color-dark);
        border-radius: 5px
    }

    .filter-item:hover {
        color:var(--primary-color) !important;
        font-weight:500 !important
    }

    .Fulltime {
        background: green;
        color:#fff
    }
    .Parttime {
        background: blue;
        color:#fff
    }
    .Casual {
        background: red;
        color:#fff
    }
    .Contract {
        background: purple;
        color:#fff
    }
</style>

@endsection