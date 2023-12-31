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
        --font-family: sans-serif;
    }
    
    .browse-jobs-btn {
        background: var(--primary-color);
        border: 2px solid var(--text-color-dark)
    }

    .browse-jobs-btn:hover {
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
    }

    .description-box:hover {
        cursor: pointer;
        border: 2px solid var(--primary-color);
        border-radius: 10px;
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
        background: var(--navbar-bg)
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
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
    }

    .card:hover {
        cursor: pointer;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
    }

</style>

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

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for electrician jobs..." aria-label="Search" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
                        <h2 class="fw-bolder m-0 p-0 text-warning">120+</h2>
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
                        <h2 class="fw-bolder m-0 p-0 text-warning">100+</h2>
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
                        <h2 class="fw-bolder m-0 p-0 text-warning">150+</h2>
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
                        <h2 class="fw-bolder m-0 p-0 text-warning">50+</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
<div class="container-fluid px-4 py-5">
    <h2 class="fw-bolder my-5 text-center">TRENDING JOB <span>POSITIONS</span></h2>
    <div class="row px-2">
        
        <div class="category col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
            <div class="d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <div class="col-12">
                                    <img src="https://seeklogo.com/images/W/wesco-logo-DC72F9E3B2-seeklogo.com.png" alt="" class="img-fluid w-100 h-100">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="col-12">
                                    <p class="card-title fw-semibold">Master Electrician</p>
                                </div>
                                <div class="col-12">
                                    <h6 class="card-subtitle mb-2 text-secondary">WESTCO Electrical and Equipment Corporation</h6>
                                </div>
                            </div>
                        </div>
                                           
                      <p class="card-text">Deadline: <span class="fw-semibold">N/A</span></p>
                      <p class="card-text">Salary: <span class="fw-semibold">₱16K - ₱18K a month</span></p>
                      <p class="card-text">Location: <span class="fw-semibold">Paranaque City</span></p>
                      <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-success card-link apply-now-btn">Apply Now <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-4 py-5">
    <h2 class="fw-bolder text-center mb-5">POPULAR JOB <span>LOCATIONS</span></h2>
    <div class="row px-2">
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
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
                <div class="card" style="width: 18rem;">
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
                <div class="card" style="width: 18rem;">
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
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/makati-location.webp') }}" class="card-img-top img-fluid" alt="Makati City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                      <p class="card-text fw-bold text-center">MAKATI</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
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
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/taguig-location.jpg') }}" class="card-img-top" alt="Taguig City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">TAGUIG</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/pasig-location.jpg') }}" class="card-img-top img-fluid" alt="Pasig City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                        <p class="card-text fw-bold text-center">PASIG</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12 job-location mb-4">
            <div class="job-location-card d-flex align-items-center justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/paranaque-location.webp') }}" class="card-img-top img-fluid" alt="Parañaque City">
                    <div class="card-body">
                        <button class="btn btn-warning text-white position-absolute popular-btn">Popular</button>
                      <p class="card-text fw-bold text-center">PARAÑAQUE</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection