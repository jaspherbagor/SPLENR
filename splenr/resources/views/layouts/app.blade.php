<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPLENR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-success bg-dark px-4" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="#">
            <img src=""> SPLENR
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item me-3">
                <a class="nav-link active fw-semibold" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link fw-semibold" href="#">JOB LISTINGS</a>
              </li>
              @if(!Auth::check())
              <li class="nav-item me-3">
                <a class="nav-link fw-semibold" href="{{ route('create.seeker') }}">JOB SEEKER</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link fw-semibold" href="#">EMPLOYER</a>
              </li>
              @endif

              <form id="form-logout" action="{{ route('logout') }}" method="post" >@csrf</form>
            </ul>
            <div class="ms-auto me-4">
              @if(Auth::check())
              <button class="btn btn-secondary fw-semibold" id="logout">LOGOUT</button>
              @endif

              @if(!Auth::check())
              <a href="{{ route('login') }}">
                <button class="btn btn-secondary fw-semibold">LOGIN</button>
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