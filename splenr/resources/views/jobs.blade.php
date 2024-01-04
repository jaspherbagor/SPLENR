@extends('layouts.app')

@section('content')

<section class="container-fluid px-4 py-5 job-listing-section">
    <div class="mt-5">
        <h2 class="fw-bolder text-center my-4">JOB LISTINGS</h2>
        
        <div class="row px-3">
            <div class="col-lg-2 col-md-2 col-sm-4 filter-column p-0">
                <div class="filter-container container-fluid p-3">
                    <h4 class="fw-bold mb-4">FILTER JOBS</h4>

                    <h5 class="fw-semibold mt-3 mb-2">SALARY</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['sort' => 'salary_high_to_low']) }}" class="text-decoration-none text-black filter-item fw-medium">HIGH TO LOW</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['sort' => 'salary_low_to_high']) }}" class="text-decoration-none text-black filter-item fw-medium">LOW TO HIGH</a></li>
                    <hr>

                    <h5 class="fw-semibold mt-3 mb-2">DATE</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['date' => 'latest']) }}" class="text-decoration-none text-black filter-item fw-medium">LATEST</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['date' => 'oldest']) }}" class="text-decoration-none text-black filter-item fw-medium">OLDEST</a></li>
                    <hr>

                    <h5 class="fw-semibold mt-3 mb-2">JOB TYPE</h5>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Fulltime']) }}" class="text-decoration-none text-black filter-item fw-medium">FULLTIME</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Parttime']) }}" class="text-decoration-none text-black filter-item fw-medium">PARTTIME</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Casual']) }}" class="text-decoration-none text-black filter-item fw-medium">CASUAL</a></li>
                    <hr>
                    <li class="ms-2"><a href="{{ route('listing.index', ['job_type' => 'Contract']) }}" class="text-decoration-none text-black filter-item fw-medium">CONTRACT</a></li>   
                </div>           
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 job-listing-column p-0">
                <div class="row ms-1">
                    @foreach($jobs as $job)
                    <div class="col-lg-4 col-md-4">
                        <div class="card p-2 {{ $job->job_type }} mb-4">
                            <div class="text-end">
                                <small class="badge text-bg-info">{{ $job->job_type }}</small>
                            </div>
                            <div class="text-center mt-2 p-3">
                                <img src="{{ Storage::url($job->profile->profile_pic) }}" alt="logo" width="100" class="listing-company-logo rounded-circle">
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