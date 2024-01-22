@extends('layouts.app')

@section('content')
<div class="py-5 mt-5 about-text-div container-fluid text-white">
    <h2 class="fw-bolder text-center mt-5">ABOUT</h2>
    <h5 class="text-center mb-2">Welcome to splenr - Your Gateway to Empowering Careers!</h5>
</div>
<section class="about-text-section mt-5">
    <div class="row mt-5 px-4">
        <div class="col-md-6">
            <h3 class="fw-bolder text-center mb-3">WHO ARE WE</h3>
            <p class="text-center">At splenr, we are passionate about connecting job seekers with rewarding opportunities and helping employers find the right talent to drive their businesses forward. Our mission is to simplify and streamline the job search process, making it efficient, transparent, and tailored to the needs of both employers and job seekers.</p>
        </div>
        <div class="col-md-6">
            <h3 class="fw-bolder text-center">OUR VISION</h3>
            <p class="text-center">We envision a world where every individual can discover and pursue their dream career, and every employer can easily access the skills and expertise they need to thrive. Splenr is committed to creating a platform that fosters meaningful connections, empowers careers, and contributes to the growth of businesses.</p>
        </div>
    </div>

    <div class="row mt-5 bg-warning px-4 py-5 text-white">
        <h3 class="fw-bolder text-center mb-5">WHAT SETS US APART</h3>
        <div class="col-md-3 col-sm-6 mb-4">
            <h4 class="fw-bolder text-center">TAILORED JOB MATCHING</h4>
            <p class="text-center">We understand that finding the perfect job or candidate is more than just matching keywords. Splenr employs advanced algorithms and a user-friendly interface to ensure precise job matching based on skills, experience, and preferences.</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <h4 class="fw-bolder text-center">USER-CENTRIC EXPERIENCE</h4>
            <p class="text-center">Our platform is designed with you in mind. Whether you are a job seeker or an employer, Splenr offers an intuitive and seamless experience. Easily navigate through job listings, applications, and employer profiles with just a few clicks.</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <h4 class="fw-bolder text-center">COMPREHENSIVE JOB LISTINGS</h4>
            <p class="text-center">For job seekers, Splenr provides a diverse range of job opportunities across various industries. From entry-level positions to executive roles, we've got you covered. Employers can trust us to showcase their job listings to a wide and targeted audience.</p>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <h4 class="fw-bolder text-center">EMPOWERING CAREERS</h4>
            <p class="text-center">We believe in the power of every individual to shape their career path. Splenr offers resources, career insights, and expert advice to help job seekers make informed decisions and employers to find the best talent.</p>
        </div>
    </div>

    <h3 class="fw-bolder text-center mt-5 mb-4">HOW WE WORK</h3>
    <h4 class="text-center fw-bold mt-5 mb-4">FOR JOB SEEKER</h4>
    <div class="row px-4 pt-3">
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Create Your Profile</h5>
            <p class="text-center">Build a comprehensive profile that highlights your skills, experience, and career goals.</p>
        </div>
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Explore Job Listings</h5>
            <p class="text-center">Browse through a vast array of job listings tailored to your preferences.</p>
        </div>
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Apply with Ease</h5>
            <p class="text-center">Submit applications directly through our platform, making job hunting a breeze.</p>
        </div>
    </div>
    <h4 class="text-center fw-bold mt-5 mb-4">FOR EMPLOYER</h4>
    <div class="row px-4 pt-3">
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Post Job Listings</h5>
            <p class="text-center">Create detailed and engaging job listings to attract the right candidates.</p>
        </div>
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Efficient Recruitment</h5>
            <p class="text-center"> Streamline your hiring process by accessing a pool of qualified and interested candidates.</p>
        </div>
        <div class="col-md-4">
            <h5 class="fw-bolder text-center">Build Your Brand</h5>
            <p class="text-center">Showcase your company culture and values to stand out as an employer of choice.</p>
        </div>
    </div>

    <h3 class="fw-bolder text-center mt-5 mb-4">OUR COMMITMENT</h3>
    <div class="row justify-content-center pb-5">
        <div class="col-10">
            <p class="text-center">Splenr is dedicated to fostering a thriving job market by facilitating connections that matter. We value transparency, diversity, and innovation. Join us in shaping the future of work and let Splenr be your trusted partner in career growth and business success.</p>
            <p class="text-center">Ready to embark on your career journey or find the perfect candidate? Explore splenr today!</p>
        </div>
    </div>
    

</section>

@include('layouts.footer')
@endsection
