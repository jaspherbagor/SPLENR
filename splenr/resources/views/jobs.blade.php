@extends('layouts.app')

@section('content')

<section class="container-fluid px-4 py-5 job-listing-section">
    <div class="mt-5">
        <h2 class="fw-bolder text-center my-4">JOB LISTINGS</h2>
        
        <div class="row mt-4">
            <div class="col-lg-3 col-md-3 col-sm-4 filter-column mb-4">
                <div class="filter-container container-fluid p-3">
                    <h4 class="fw-bold mb-4">FILTER JOBS</h4>

                    <h5 class="fw-semibold mt-3 mb-2">SALARY</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['sort' => 'salary_high_to_low']) }}" class="text-decoration-none text-black filter-item fw-medium">High to Low</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['sort' => 'salary_low_to_high']) }}" class="text-decoration-none text-black filter-item fw-medium">Low to High</a></li>
                    <hr>

                    <h5 class="fw-semibold mt-3 mb-2">DATE</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['date' => 'latest']) }}" class="text-decoration-none text-black filter-item fw-medium">Latest</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['date' => 'oldest']) }}" class="text-decoration-none text-black filter-item fw-medium">Oldest</a></li>
                    <hr>

                    <h5 class="fw-semibold mt-3 mb-2">JOB TYPE</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Fulltime']) }}" class="text-decoration-none text-black filter-item fw-medium">Fulltime</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Parttime']) }}" class="text-decoration-none text-black filter-item fw-medium">Parttime</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Casual']) }}" class="text-decoration-none text-black filter-item fw-medium">Casual</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Contract']) }}" class="text-decoration-none text-black filter-item fw-medium">Contract</a></li>   
                </div>           
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 job-listing-column">
                <div class="row align-items-center">
                    @foreach($jobs as $job)
                    <div class="col-lg-4 col-md-4">
                        <div class="card job-listing-card p-1 mb-4">
                            <div class="text-end">
                                <small class="badge {{ $job->job_type }}">{{ $job->job_type }}</small>
                            </div>
                            <div class="text-center mt-2 p-3">
                                <img src="{{ Storage::url($job->profile->profile_pic) }}" alt="logo" class="listing-company-logo rounded-circle">
                                <br>
                                <p class="d-block fw-bold listing-title">{{ $job->title }}</p>
                                <hr>
                                <p class="listing-company-name">{{ $job->profile->name }}</p>
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <small class="ms-1 listing-address">{{ $job->address }}</small>
                                </div>
                                <p class="listing-salary mt-2 fw-semibold">₱{{ number_format($job->salary,2) }}</p>
                                <div class="text-center mt-3"> 
                                    <a href="{{ route('job.show', [$job->slug]) }}">
                                        <button class="btn listing-apply-btn fw-semibold">APPLY NOW <i class="bi bi-arrow-right"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
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
        --fulltime-card-bg: #2ECC71;
        --parttime-card-bg: #FFA500;
        --casual-card-bg: #ffd700;
        --contract-card-bg: #E74C3C;
        --font-family: sans-serif;
    }

    .filter-container {
        background: var(--navbar-bg);
        border: 1.5px solid var(--text-color-dark);
        border-radius: 5px
    }

    .filter-item:hover {
        color:var(--primary-color) !important;
        font-weight:500 !important
    }

    .listing-company-logo {
        width: 60px;
        height: 60px
    }

    .listing-title, .listing-company-name, .listing-address, .listing-salary
    {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .listing-apply-btn {
        background: var(--primary-color);
        border: 2px solid var(--text-color-dark)
    }

    .listing-apply-btn:hover {
        background: var(--text-color-dark);
        border: 2px solid var(--primary-color);
        color:var(--text-color-light)
    }

    .job-listing-card {
        border: 2px solid var(--text-color-dark)
    }
    .Fulltime {
        background: var(--fulltime-card-bg);
        color:var(--text-color-light)
    }
    .Parttime {
        background: var(--parttime-card-bg);
        color: var(--text-color-dark)
    }
    .Casual {
        background: var(--casual-card-bg);
        color:var(--text-color-dark)
    }
    .Contract {
        background: var(--contract-card-bg);
        color:var(--primary-color)
    }
</style>

@endsection