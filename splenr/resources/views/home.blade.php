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
  </style>
<div class="container-fluid px-4 py-5 d-flex align-items-center justify-content-center">
    <div class="row mt-5 align-items-center">
        <div class="col-lg-6 col-md-6 px-4 mx-auto mt-5 align-items-center d-flex justify-content-center">
            <div class="hero-text">
                <h1 class="fw-bolder">Land the Perfect Electrician Position</h1>
                <p class="fw-medium mt-2 fs-6">Assisting electricians to find their perfect fit in the industry.</p>
                <a href="#"  class="btn browse-jobs-btn px-4 py-3 fw-semibold">BROWSE JOBS</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('image/hero-image.png') }}" alt="Electrician Jobs" class="hero-image img-fluid mt-5">
        </div>
    </div>
</div>
@endsection