@extends('layouts.app')

@section('content')
    <!--FAQS-->
    <div class="container justify-content-center text-center pt-4 mt-5">
        <h2 class="mt-5 fw-bolder">FREQUENTLY ASKED QUESTIONS (FAQs)</h2>
        <p class="lead">Find the answers to your most common questions about AgriLadder's agriculture hourly job search
            platform for farmers and farmhands, offering reliable and flexible opportunities in the industry</p>
    </div>
    <section class="tab-class text-center ">
        <ul class="nav nav-pills d-inline-flex justify-content-center align-items-center border-bottom mb-5">
            <li class="nav-item">
                <a class="d-flex align-items-center text-start pb-3 active" data-bs-toggle="pill" href="#general">
                    <h6 class="mt-n1 mb-0"> General Inquiries</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#jobseekers">
                    <h6 class="mt-n1 mb-0"><i class="fa-" aria-hidden="true"></i> Jobseeker FAQs </h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#employer">
                    <h6 class="mt-n1 mb-0">Employer FAQs</h6>
                </a>
            </li>
        </ul>
        <!--General Inquiry FAQ-->
        <div class="container-fluid px-4 py-5">
            <div class="tab-content">
                <div id="general" class="tab-pane fade show p-0 active">
                    <h5 class="lead fw-bold" style="color:#00660a">General Inquiries</h5>
                    <div id="accordion" class="accordion-style">
                        <div class="card mb-3">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne"><span class="text-theme-secondary me-2">Q.</span>How
                                        does AgriLadder's hourly job search work for
                                        agriculture, and how can farmers and farmhands benefit from using it?</button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                <div class="card-body" style="text-align: justify;">
                                    AgriLadder's hourly job search for agriculture connects farmers and farmhands by
                                    allowing farmers to
                                    post their job requirements and farmhands to search for available job opportunities.
                                    This platform simplifies the process of hiring and finding work for farmers and
                                    farmhands alike.
                                    Farmers can find skilled workers quickly and easily, and farmhands can find job
                                    opportunities that
                                    match their skills and interests.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo"><span class="text-theme-secondary me-2">Q.</span>
                                        How can farmers post their job requirements on AgriLadder's hourly job search
                                        platform, and what
                                        information should they include?</button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                <div class="card-body" style="text-align: justify;">
                                    Farmers can create an account on AgriLadder's hourly job search platform and post their
                                    job
                                    requirements by filling in the necessary details in the job posting form.
                                    Farmers should include information such as the job title, job description, location,
                                    expected work
                                    hours, pay rate, and the required skills or qualifications. By providing detailed job
                                    requirements,
                                    farmers can attract the right candidates for the job and save time in the hiring
                                    process.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree"><span class="text-theme-secondary me-2">Q.</span>How
                                        can farmhands search for job opportunities on
                                        AgriLadder's hourly job search platform, and what features does the platform
                                        offer?</button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion">
                                <div class="card-body" style="text-align: justify;">
                                    Farmhands can search for job opportunities on AgriLadder's hourly job search platform by
                                    creating an
                                    account, selecting their desired job category and location, and browsing through the
                                    available job
                                    postings. The platform offers various features, such as filters to narrow down search
                                    results, the
                                    ability to save job postings for later, and the option to apply for jobs directly
                                    through the
                                    platform.
                                    This makes it easy for farmhands to find and apply for relevant job opportunities
                                    quickly and
                                    efficiently.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour"><span class="text-theme-secondary me-2">Q.</span>How
                                        does AgriLadder ensure the quality of job postings
                                        and candidates on its hourly job search platform for agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordion">
                                <div class="card-body" style="text-align: justify;">
                                    AgriLadder's hourly job search platform for agriculture ensures the quality of job
                                    postings and
                                    candidates by verifying each farmer and farmhand account and reviewing each job posting
                                    before it goes
                                    live on the platform. The platform also offers a rating and review system that allows
                                    farmers and
                                    farmhands to rate each other based on their experiences working together.
                                    This feedback system helps maintain the quality of job postings and candidates on the
                                    platform.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive"><span class="text-theme-secondary me-2">Q.</span>How
                                        can farmers and farmhands use AgriLadder's hourly
                                        job search platform for agriculture to build long-term relationships and grow their
                                        businesses?</button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordion">
                                <div class="card-body" style="text-align: justify;">
                                    AgriLadder's hourly job search platform for agriculture offers a simple and efficient
                                    way for farmers
                                    and farmhands to connect with each other, build relationships, and grow their
                                    businesses. By using the
                                    platform regularly and providing quality work, farmers and farmhands can establish a
                                    positive
                                    reputation on the platform and attract more job opportunities or higher-quality workers.
                                    AgriLadder's platform offers the potential for long-term relationships and business
                                    growth for both
                                    farmers and farmhands.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--JobSeekers FAQ-->
        <div class="container">
            <div class="tab-content">
                <div id="jobseekers" class="tab-pane fade show p-0">
                    <div id="accordion1" class="accordion-style">
                        <h5 class="lead fw-bold" style="color:#00660a">JobSeeker Frequently Asked Questions</h5>
                        <div class="card mb-3">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I create farmhand account on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordion1">
                                <div class="card-body" style="text-align: justify;">
                                    To create a farmhand account on AgriLadder's hourly job search platform for agriculture,
                                    simply visit
                                    the AgriLadder website and click the "Login/Register" header menu and click the
                                    "Farmhand(Jobseekers)"
                                    then click the green link below the form that says "Create an account". You'll be asked
                                    to provide
                                    your name, email address, and a password.
                                    Once you've created an account, you can start browsing job postings and applying for
                                    positions that
                                    match your skills and experience.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I search for job opportunities on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion1">
                                <div class="card-body" style="text-align: justify;">
                                    To search for job opportunities on AgriLadder's hourly job search platform for
                                    agriculture, log in to
                                    your account and select the job category and location you're interested in. You can then
                                    browse
                                    through the available job postings or use filters to narrow down your search results.
                                    Once you've found a job you're interested in, you can apply directly through the
                                    platform.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        can I apply for jobs on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion1">
                                <div class="card-body" style="text-align: justify;">
                                    To apply for jobs on AgriLadder's hourly job search platform for agriculture, simply
                                    click on the job
                                    posting you're interested in and review the job
                                     requirements and details. If you meet
                                    the requirements
                                    and are interested in the position, click the "Apply Now" button and follow the
                                    instructions to submit
                                    your application.
                                    Some job postings may require additional documents or
                                     information, so be sure to review
                                    the posting
                                    carefully before applying.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I communicate with farmers on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion1">
                                <div class="card-body" style="text-align: justify;">
                                    You can communicate with farmers on AgriLadder's hourly job search platform for
                                    agriculture through
                                    the platform's messaging system. When you apply for a job, the farmer will receive your
                                    application
                                    and can respond to you directly through the platform.
                                    You can also initiate communication with farmers by sending them a message through the
                                    platform's
                                    messaging system.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        can I build a positive reputation on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordion1">
                                <div class="card-body" style="text-align: justify;">
                                    To build a positive reputation on AgriLadder's hourly job search platform for
                                    agriculture, it's
                                    important to provide quality work and communicate effectively with farmers. When you
                                    complete a job,
                                    be sure to ask the farmer for a rating and review, as this feedback will be visible to
                                    other farmers
                                    on the platform.
                                    You can also keep your profile up-to-date with your skills and experience, and apply for
                                    jobs
                                    regularly to increase your chances of finding work.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Employer FAQs-->
        <div class="container">
            <div class="tab-content">
                <div id="employer" class="tab-pane fade show p-0">
                    <div id="accordion2" class="accordion-style">
                        <h5 class="lead fw-bold" style="color:#00660a">Employer Frequently Asked Questions</h5>
                        <div class="card mb-3">
                            <div class="card-header" id="heading6">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I create a farmer account on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordion2">
                                <div class="card-body" style="text-align: justify;">
                                    To create a farmer's account on AgriLadder's hourly job search platform for agriculture,
                                    simply visit
                                    the AgriLadder website and click the "Login/Register" header menu and click the
                                    "Farmer(Employer)"
                                    then click the green link below the form that says "Create an account". You'll be asked
                                    to provide
                                    your name, email address, and a password.
                                    Once you've created an account, you can start posting job opportunities and connecting
                                    with farmhands
                                    who match your requirements.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading7">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I post a job opportunity on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordion2">
                                <div class="card-body" style="text-align: justify;">
                                    To post a job opportunity on AgriLadder's hourly job search platform for agriculture,
                                    log in to your
                                    account and click the "Post a Job" button. You'll be asked to provide details such as
                                    the job title,
                                    job description, location, expected work hours, pay rate, and the required skills or
                                    qualifications.
                                    Once you've created a job posting, it will be reviewed by AgriLadder's team before it
                                    goes live on the
                                    platform.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading8">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        do I search for farmhands on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordion2">
                                <div class="card-body" style="text-align: justify;">
                                    To search for farmhands on AgriLadder's hourly job search platform for agriculture, log
                                    in to your
                                    account and browse through the available applications for your job postings. You can
                                    also use filters
                                    to narrow down your search results based on location, experience, or other criteria.
                                    Once you've found a farmhand you're interested in hiring, you can communicate with them
                                    directly
                                    through the platform's messaging system.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading9">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9"><span
                                            class="text-theme-secondary me-2">Q.</span>How
                                        can I communicate with farmhands on AgriLadder's hourly job search platform for
                                        agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse9" class="collapse" aria-labelledby="heading9"
                                data-bs-parent="#accordion2">
                                <div class="card-body" style="text-align: justify;">
                                    You can communicate with farmhands on AgriLadder's hourly job search platform for
                                    agriculture through
                                    the platform's messaging system. When you receive an application for a job posting, you
                                    can review the
                                    farmhand's profile and application and communicate with them directly through the
                                    platform.
                                    You can also initiate communication by sending them a message through the platform's
                                    messaging system.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="heading10">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse10" aria-expanded="false"
                                        aria-controls="collapse10"><span class="text-theme-secondary me-2">Q.</span>How
                                        can I ensure a positive experience for farmhands on
                                        AgriLadder's hourly job search platform for agriculture?</button>
                                </h5>
                            </div>
                            <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                data-bs-parent="#accordion2">
                                <div class="card-body" style="text-align: justify;">
                                    To ensure a positive experience for farmhands on AgriLadder's hourly job search platform
                                    for
                                    agriculture, it's important to provide clear job requirements and expectations,
                                    communicate
                                    effectively, and provide fair compensation. When you hire a farmhand through the
                                    platform, be sure to
                                    provide feedback on their work and offer constructive criticism to help them improve.
                                    By maintaining a positive and respectful relationship with your farmhands, you can build
                                    a strong
                                    reputation on the platform and attract higher-quality workers in the future.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
