<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPLENR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
      :root {
          --primary-color: #fdd100;
          --navbar-bg: #F5F4F2;
          --text-color-light: #ffffff;
          --text-color-dark: #202020;
          --font-family: sans-serif;
      }
      .nav-link {
        font-family: sans-serif
      }

      .nav-link:hover {
        color: var(--primary-color)!important
      }
      .navbar {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        background: var(--navbar-bg);
        z-index:1000
      }

      .login-btn, .logout-btn {
        background:var(--primary-color);
        border: 2px solid var(--text-color-dark)
      }

      .login-btn:hover, .logout-btn:hover {
        background:var(--text-color-dark);
        border: 2px solid var(--primary-color);
        color:var(--text-color-light)!important
      }

      .navbar-toggler {
        border: none
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg px-3 position-fixed container-fluid mb-5" data-bs-theme="light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('image/SPLENR-LOGO.svg') }}" class="logo" alt="SPLENR Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item me-4">
                <a class="nav-link active fw-semibold text-black fs-6" aria-current="page" href="/"><i class="bi bi-house-door fs-5"></i> HOME</a>
              </li>

              @if(Auth::check())
              <li class="nav-item me-4">
                <a class="nav-link active fw-semibold text-black fs-6" aria-current="page" href="{{ route('seeker.profile') }}"><i class="bi bi-person fs-4"></i> PROFILE</a>
              </li>
              @endif
              
              {{-- <li class="nav-item me-4">
                <a class="nav-link active fw-semibold text-black fs-6" aria-current="page" href="{{ route('dashboard') }}"><i class="bi bi-speedometer fs-5"></i> DASHBOARD</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link active fw-semibold text-black fs-6" aria-current="page" href="{{ route('subscribe') }}"><i class="bi bi-bell fs-5"></i> SUBSCRIBE</a>
              </li> --}}
              <li class="nav-item me-4">
                <a class="nav-link fw-semibold text-black fs-6" href="/jobs"><i class="bi bi-briefcase fs-5"></i> JOBS</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link fw-semibold text-black fs-6" href="#"><i class="bi bi-file-earmark-text fs-5"></i> RESOURCES</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link fw-semibold text-black fs-6" href="#"><i class="bi bi-telephone fs-5"></i> CONTACT</a>
              </li>
              {{-- @if(!Auth::check())
              <li class="nav-item me-4">
                <a class="nav-link fw-semibold text-black fs-6" href="{{ route('create.seeker') }}"><i class="bi bi-person fs-5"></i> JOB SEEKER</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link fw-semibold text-black fs-6" href="{{ route('create.employer') }}"><i class="bi bi-building fs-5"></i> EMPLOYER</a>
              </li>
              @endif --}}

              <form id="form-logout" action="{{ route('logout') }}" method="post" >@csrf</form>
            </ul>
            <div class="ms-auto me-4">
              @if(Auth::check())
              <button class="btn fw-semibold text-black logout-btn fs-6" id="logout">LOGOUT</button>
              @endif

              @if(!Auth::check())
              <a href="{{ route('login') }}">
                <button class="btn fw-semibold text-black login-btn fs-6">LOGIN</button>
              </a>
              @endif
            </div>
          </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    @yield('content')

    <script>
        let logout = document.getElementById('logout');
        let form = document.getElementById('form-logout');
        logout.addEventListener('click', function() {
            form.submit();
        })
    </script>
    
</body>
</html>