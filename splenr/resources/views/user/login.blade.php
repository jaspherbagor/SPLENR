@extends('layouts.app')

@section('content')
<style>
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

    .login-container {
        background: url('{{ asset('image/login-background.png') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 100vh
    }

    .input-group-addon i {
        margin-left: -37px;
        cursor: pointer;
        z-index: 200;
        color:var(--text-color-dark)
    }

    .logo-img {
        height:90px
    }

    input {
        border: 2px solid var(--text-color-dark) !important;
    }

    .form-container {
        border-radius:10px;
        background: rgba(250, 250, 250, 0.5);
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        width: 350px
    }

    .register-link:hover {
        color: green
    }
    
</style>
<div class="login-container container-fluid d-flex align-items-center justify-content-center px-2 py-5 mt-5">
    <div class="g-3 needs-validation form-container p-3 mt-5 h-auto">
        <div class="text-center">
            <a href="/">
                <img src="{{ asset('image/login-logo.svg') }}" class="logo-img"/>
            </a>
            
        </div>
        <h2 class="my-4 text-center fw-bolder heading">Login Account</h2>
        @include('message')
        <form action="{{ route('login.post') }}" method="post">@csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="col-md-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="d-flex">
                            <input type="password" name="password" class="form-control" id="password">
                            <span class="input-group-addon" id="togglePassword">
                                <i class="bi bi-eye position-absolute fs-4 mt-1" ></i>
                            </span>   
                        </div>
                        @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif             
                    </div>
                </div>
            </div>
            <div class="text-center mt-2 mb-2">
                <button class="btn fs-5 fw-semibold px-3 py-2 login-btn" type="submit" id="login">LOGIN</button>
            </div>

            <div class="text-center mt-4">
                <p class="text-black">Don't have an account yet? Register as a <a href="{{ route('create.seeker') }}" class="text-decoration-none register-link fw-semibold">Job Seeker</a> or an <a href="{{ route('create.employer') }}" class="text-decoration-none register-link fw-semibold">Employer.</a> </p>
            </div>
        </form>
        
    </div>
</div>

<script>
    let password = document.getElementById('password');
    let togglePassword = document.getElementById('togglePassword');
    togglePassword.addEventListener('click', function() {
        if(password.type === "password"){
            password.type = "text";
            togglePassword.innerHTML=`<i class="bi bi-eye-slash position-absolute fs-4 mt-1" ></i>`;
        } else {
            password.type = "password";
            togglePassword.innerHTML=`<i class="bi bi-eye position-absolute fs-4 mt-1" ></i>`;
        }
    })
</script>


@endsection