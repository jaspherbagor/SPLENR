@extends('layouts.app')
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
    
    .contact-info-left p {
        color: var(--primary-color)
    }

    .contact-text-section {
        background: url('{{ asset('image/contact-bg.svg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position:center;
    }

    /* Contact Form Start */
    #firstname, #lastname, #contactnumber, #zipcode, #email, #address {
        height:50px !important
    }

    #firstname, #lastname, #contactnumber, #zipcode, #email, #address, #message {
        border:1px solid var(--text-color-dark) !important
    }

    textarea.message-text-area {
        height:150px
    }

    .submit-form-btn {
        background:var(--primary-color) !important;
        border-radius:10px;
        border: 2px solid var(--text-color-dark) !important;
    }

    .submit-form-btn:hover {
        background: var(--text-color-dark) !important;
        color: var(--text-color-light) !important;
        border: 2px solid var(--primary-color) !important;
    }
    /* Contact Form End */


    /* Contact Section Start */
    .contact {
        background: var(--navbar-bg);
    }

    .contact p {
        color:var(--primary-color)
    }

    .social-icons a i:hover {
        color:var(--primary-color)
    }
    /* Contact Section End */
</style>
@section('content')
<section class="contact-text-section container-fluid
 mt-5 py-5 px-4 w-100 d-flex align-content-center justify-content-center">
    <div class="services-text text-white my-5">
        <h1 class="fw-bolder text-center">CONTACT FORM</h1>
    </div>
</section>
{{-- Contact Form Start --}}
<section class="form_section container-fluid px-4 py-5">
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <form method="POST" action="{{ route('submit.contact') }}">@csrf
        <div class="row">
            <div class="col-md-6 px-4 py-3">
                <label for="firstname" class="form-label">First Name: </label>
                <input type="text" name="first_name" id="firstname" class="form-control" required autoComplete="off"/>
            </div>
            <div class="col-md-6 px-4 py-3">
                <label for="lastname" class="form-label">Last Name: </label>
                <input type="text" name="last_name" id="lastname" class="form-control" required autoComplete="off"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 px-4 py-3">
            <label for="contactnumber" class="form-label">Contact Number: </label>
            <input type="tel" name="contact_number" id="contactnumber"
             class="form-control" required autoComplete="off"/>
            </div>
            <div class="col-md-6 px-4 py-3">
                <label for="zipcode" class="form-label">Zip/Postal Code: </label>
                <input type="number" name="zip_code" id="zipcode" class="form-control" required autoComplete="off"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 px-4 py-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" id="email" name="email" class="form-control" required autoComplete="off"/>
            </div>
            <div class="col-md-6 px-4 py-3">
                <label for="address" class="form-label">Address: </label>
                <input type="text" name="address" id="address" class="form-control" required autoComplete="off"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-4 py-3">
                <label for="message" class="form-label">Your Message: </label>
                <textarea name="message" id="message"
                 class="form-control message-text-area" required autoComplete="off"></textarea>
            </div>
        </div>
        <div class="mt-3 px-2">
            <button type="submit" class="btn submit-form-btn ms-1 px-3 py-2 fw-semibold" id="sendContact">
                Send
            </button>
        </div>
    </form>
</section>
{{-- Contact Form End --}}

{{-- Contact Info Section Start  --}}
<section class="contact container-fluid py-2 h-auto bg-dark">
    <div class="row">
        <div class="col-md-6 contact-info-left py-4 px-4">
            <h2 class="mb-4 mt-2 text-white fw-bold">CONTACTS</h2>
            <p class="mt-5">
                PHONE:
                <span class="d-inline">
                    <a href="tel:09169675327" target="_blank" class="text-decoration-none text-white">
                         0916-967-5327
                    </a>
                </span>
            </p>
            <p>ADDRESS: <span class="text-white d-inline"> Antonino, Labason, Zamboanga del Norte 7117</span></p>
            <p>OPENING HOURS: <span class="text-white d-inline"> 8:00AM-5:00PM Mon-Sat</span></p>
            <p>
                EMAIL:
                 <span class="d-inline">
                    <a href="mailto:jbagor96@gmail.com" target="_blank" class="text-decoration-none text-white">
                         jbagor96@gmail.com
                    </a>
                </span>
            </p>
            <div class="social-icons m-auto d-flex gap-3">
                <a href="https://www.facebook.com/jas.bagor/" target="_blank"
                 class="text-decoration-none fs-3 text-white">
                 <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.tiktok.com/@jasbgr" target="_blank"
                 class="text-decoration-none fs-3 text-white">
                 <i class="bi bi-tiktok"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCTNYaiZxQGNiNLFg8VosSpw"
                 target="_blank" class="text-decoration-none fs-3 text-white">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>
        </div>
        <div class="col-md-6 contact-map-right py-4 px-4">
            <iframe src="https:www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.4791905761967!2d122.51804132756394!3d8.06749679481777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3253c81e878401b9%3A0xeade9e033a04dabe!2sAntonino%2C%20Labason%2C%20Zamboanga%20del%20Norte!5e1!3m2!1sen!2sph!4v1700537105943!5m2!1sen!2sph" class="h-100 w-100 border-0" title="location map">
            </iframe>
        </div>
    </div>
</section>
{{-- Contact Info Section End --}}
@include('layouts.footer')

@endsection

<script>
    var url = "{{ route('submit.contact') }}";
    document.getElementById("sendContact").addEventListener("click", function(event) {
        var formData = new FormData(form)
        fetch(url, {
        method: "POST",
        headers:{
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
        body: formData
    }).then(response => {
        if(response.ok) {
            return response.json();
        }else{
            throw new Error('Error')
        }
    }).then(data => {
        console.log(data)
    }).catch(error => {
        console.log(error)
    })
    }
    
})
   
</script>