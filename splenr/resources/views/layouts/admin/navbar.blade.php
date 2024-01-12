<nav class="sb-topnav navbar navbar-expand navbar-light bg-white">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/">
        <img src="{{ asset('image/SPLENR-LOGO.svg') }}" alt="logo">
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars fs-5"></i></button>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw fs-5"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li class="p-0">
                    <form id="form-logout" action="{{ route('logout') }}" method="post" class="p-0 m-0">@csrf
                        <button type="submit" class="dropdown-item py-0" id="logout">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

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


    .navbar-toggler {
      border: none
    }
  </style>