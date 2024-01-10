@extends('layouts.app')

@section('content')
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
    
    .browse-jobs-btn, .post-job-btn, .apply-now-btn {
        background: var(--primary-color);
        border: 2px solid var(--text-color-dark)
    }

    .browse-jobs-btn:hover, .post-job-btn:hover, .apply-now-btn:hover {
        background: var(--text-color-dark);
        border: 2px solid var(--primary-color);
        color:var(--text-color-light)
    }

    h2 span{
        color:var(--primary-color)
    }

    .description-icon {
        font-size: 60px;
        color:var(--primary-color);
        border: 2px solid var(--navbar-bg);
        border-radius: 50%
    }

    .description-box {
        border: 2px solid var(--text-color-light);
        cursor: pointer;
    }

    .description-box:hover .description-icon {
        cursor: pointer;
        border: 2px solid var(--primary-color);
        border-radius: 10px;
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
        border-radius: 50%
    }

    .description-box:hover .description-quantity {
        transform: scale(1.07);
        color: var(--primary-color) !important
    }

    .card-img-top {
        height:200px
    }

    .popular-btn {
        top: 2px;
        right:2px;
        
    }
    .company-img {
        height: 100px
    }

    .card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px,
         rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        border: 2px solid var(--text-color-dark)
    }

    .card:hover {
        cursor: pointer;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px,
         rgba(17, 17, 26, 0.1) 0px 16px 56px,
          rgba(17, 17, 26, 0.1) 0px 24px 80px;
    }

    .card-title, .card-subtitle, .card-text {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .carousel-text i {
        font-size:60px
    }

    .success-stories-section {
        background: url('{{ asset('image/stories_bg.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;

    }

    .employer-cta-section {
        background: url('{{ asset('image/employer-cta-bg.svg') }}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .listing-company-logo {
        width: 60px;
        height: 60px
    }

    .Fulltime, .Parttime, .Casual, .Contract {
        color:var(--text-color-dark)
    }
    .Fulltime {
        background: var(--fulltime-card-bg);
    }
    .Parttime {
        background: var(--parttime-card-bg);
    }
    .Casual {
        background: var(--casual-card-bg);
    }
    .Contract {
        background: var(--contract-card-bg);
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

</style>
{{-- Hero Section --}}
<div class="container-fluid px-4 py-5 d-flex align-items-center justify-content-center">
    <div class="row mt-5 align-items-center">
        <div class="col-lg-6 col-md-6 px-4 mx-auto mt-5 align-items-center d-flex justify-content-center">
            <div class="hero-text">
                <h1 class="fw-bolder">Land the Perfect Electrician Position</h1>
                <p class="fw-medium mt-2 fs-6">Assisting electricians to find their perfect fit in the industry.</p>
                <a href="/jobs" class="btn browse-jobs-btn p-3 fw-semibold">BROWSE JOBS</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('image/hero-image.png') }}" alt="Electrician Jobs" class="hero-image img-fluid mt-5">
        </div>
    </div>
</div>

{{-- <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for electrician jobs..."
                     aria-label="Search" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
{{-- Feature Section --}}
<div class="container-fluid px-4 mty-5 pt-5 text-center d-flex align-items-center justify-content-center">
    <div class="row d-flex align-items-center justify-content-center text-center">
        <div class="description-box col-lg-3 col-md-3 col-sm-6 text-center d-flex mb-4  p-2">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <i class="bi bi-briefcase description-icon px-4 py-2"></i>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <p class="fw-medium my-0 py-0 fs-5">Live Jobs</p>
                    </div>
                    <div class="col-12 my-0 p-0">
                        <h2 class="fw-bolder m-0 p-0 text-warning description-quantity">120+</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-box col-lg-3 col-md-3 col-sm-6 text-center d-flex mb-4  p-2">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <i class="bi bi-buildings description-icon px-4 py-2"></i>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <p class="fw-medium m-0 p-0 fs-5">Companies</p>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <h2 class="fw-bolder m-0 p-0 text-warning description-quantity">100+</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-box col-lg-3 col-md-3 col-sm-6 text-center d-flex mb-4 p-2">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <i class="bi bi-person-circle description-icon px-4 py-2"></i>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <p class="fw-medium m-0 p-0 fs-5">Candidates</p>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <h2 class="fw-bolder m-0 p-0 text-warning description-quantity">150+</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-box col-lg-3 col-md-3 col-sm-6 text-center d-flex mb-4 p-2">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <i class="bi bi-file-earmark-plus-fill description-icon px-4 py-2"></i>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <p class="fw-medium m-0 p-0 fs-5">New Jobs</p>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <h2 class="fw-bolder m-0 p-0 text-warning description-quantity">50+</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Trusted Company Section --}}
<div class="container-fluid px-4 py-5">
    <h2 class="fw-bolder text-center my-5">OUR TRUSTED <span>COMPANY</span></h2>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/WESTCO corporation.png') }}" alt="WESTCO" class="company-img img-fluid">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/Knauf_Logo.png') }}" alt="Knauf" class="company-img img-fluid">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/Meralco.png') }}" alt="MERALCO" class="company-img img-fluid">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/pilmico.jfif') }}" alt="pilmico" class="company-img img-fluid">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/PIV.jfif') }}" alt="Premium Infinite Ventures Inc." class="company-img img-fluid">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 d-flex align-items-center justify-center">
            <img src="{{ asset('image/TG.png') }}" alt="Trends Group In" class="company-img img-fluid">
        </div>
    </div>
</div>
{{-- Trending Job Positions Section --}}
<div class="container-fluid px-4 py-5">
    <h2 class="fw-bolder my-5 text-center">TRENDING JOB <span>POSITIONS</span></h2>
    <div class="row px-2 align-items-center justify-content-center">
        @foreach(\App\Models\Listing::take(8)->orderBy('id','DESC')->get() as $listing)
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="card job-listing-card p-1 mb-4">
                <div class="text-end">
                    <small class="badge {{ $listing->job_type }}">{{ $listing->job_type }}</small>
                </div>
                <div class="text-center mt-2 p-3">
                    <img src="{{ Storage::url($listing->profile->profile_pic) }}"
                     alt="logo" class="listing-company-logo rounded-circle">
                    <br>
                    <p class="d-block fw-bold listing-title">{{ $listing->title }}</p>
                    <hr>
                    <p class="listing-company-name">{{ $listing->profile->name }}</p>
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <small class="ms-1 listing-address">{{ $listing->address }}</small>
                    </div>
                    <p class="listing-salary mt-2 fw-semibold">₱{{ number_format($listing->salary,2) }}</p>
                    <div class="text-center mt-3">
                        <a href="{{ route('job.show', [$listing->slug]) }}">
                            <button class="btn listing-apply-btn fw-semibold">
                                APPLY NOW <i class="bi bi-arrow-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- Popular Job Locations Section --}}
<div class="container-fluid px-4 py-5">
    <h2 class="fw-bolder text-center mb-5">POPULAR JOB <span>LOCATIONS</span></h2>
    <div class="row px-2">
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/cebu-location.jpg') }}" class="card-img-top" alt="Cebu">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">CEBU</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/quezon-location.jpg') }}" class="card-img-top" alt="Quezon">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">QUEZON</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/cavite-location.webp') }}" class="card-img-top img-fluid" alt="Cavite">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">CAVITE</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/makati-location.webp') }}"
                     class="card-img-top img-fluid" alt="Makati City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                      <p class="card-text fw-bold text-center">MAKATI</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/pasay-location.jpg') }}" class="card-img-top" alt="Pasay City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">PASAY</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/paranaque-location.webp') }}" class="card-img-top" alt="Parañaque City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">PARAÑAQUE</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/pasig-location.jpg') }}" class="card-img-top" alt="Pasig City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">PASIG</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 25rem;">
                    <img src="{{ asset('image/taguig-location.jpg') }}" class="card-img-top" alt="Taguig City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">TAGUIG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Employer CTA Section --}}
<div class="employer-cta-section container-fluid px-4 py-5 d-flex justify-content-center align-items-center">
    <div class="container text-center">
        <h2 class="mb-4 fw-bolder text-white">Looking for Electricians to Hire?</h2>
        <h5 class="mb-4 text-white">Post your job openings and find qualified electricians quickly and efficiently.</h5>
        <a href="{{ route('create.employer') }}"
         class="btn btn-warning btn-outline-dark btn-lg fw-semibold px-3 py-2 post-job-btn">
            Post a Job
        </a>
    </div>
</div>

<section class="success-stories-section container-fluid px-3 py-4 text-center h-auto">

    <h2 class="fw-bolder mt-4 mb-3 text-white">SUCCESS <span>STORIES</span></h2>

    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade mb-4 mt-3 px-2" data-bs-ride="carousel">
        <div class="carousel-inner px-0">

            <div class="carousel-item active">
                <div class="carousel-text">
                    <i class="bi bi-quote text-warning"></i>
                    <h3 class="fw-medium text-white fst-italic">
                        "Splenr has been a game-changer in my job search.
                         The platform's user-friendly interface and extensive job listings helped me
                          find the perfect electrician role.
                           Kudos to Splenr for connecting job seekers with incredible opportunities!"
                    </h3>
                    <h5 class="fw-bold mb-5 mt-4 text-warning">Olivia Chen</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-text">
                    <i class="bi bi-quote text-warning"></i>
                    <h3 class="fw-medium text-white fst-italic">
                        "Splenr is our go-to platform for hiring electricians.
                         The process of posting jobs and filtering applicants is incredibly efficient.
                          We've successfully recruited skilled professionals through Splenr's platform,
                           making our hiring process seamless."
                    </h3>
                    <h5 class="fw-bold mb-5 mt-4 text-warning">Jonathan Martinez</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-text">
                    <i class="bi bi-quote text-warning"></i>
                    <h3 class="fw-medium text-white fst-italic">
                        "Splenr makes job hunting a breeze!
                         The tailored job recommendations and easy application process streamlined my search.
                          The platform's responsiveness and diverse job listings exceeded my expectations.
                           Highly recommended for aspiring electricians!"
                    </h3>
                    <h5 class="fw-bold mb-5 mt-4 text-warning">Michael Turner</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-text">
                    <i class="bi bi-quote text-warning"></i>
                    <h3 class="fw-medium text-white fst-italic">
                        "Impressed by the quality of candidates we found on Splenr!
                         The platform attracts top-notch talent in the electrical field.
                          The intuitive interface and tools for managing job postings make it
                           an invaluable resource for employers seeking skilled electricians."
                    </h3>
                    <h5 class="fw-bold mb-5 mt-4 text-warning">Emily Rodriguez</h5>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-text">
                    <i class="bi bi-quote text-warning"></i>
                    <h3 class="fw-medium text-white fst-italic">
                        "Splenr is not just a job portal; it's a career launchpad!
                         As an aspiring electrician, I found an array of opportunities that matched
                          my skills and preferences. The platform's support in navigating the job
                           market and its user-friendly interface make it an indispensable tool for
                            anyone entering the electrical field. Splenr has my highest recommendation!"
                    </h3>
                    <h5 class="fw-bold mb-5 text-warning mt-4">Robert Thompson</h5>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev m-0" type="button"
         data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next m-0" type="button"
         data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

@include('layouts.footer')

@endsection
