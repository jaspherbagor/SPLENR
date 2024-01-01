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
    --footer-bg: #000;
    --text-color-light: #fff;
    --text-color-dark: #000;
    --font-family: sans-serif;
}

footer {
    background: var(--footer-bg);
}

.footer_copyright p {
    font-size: 12px
}

.footer_link:hover, p.footer_link:hover, .footer_a:hover {
    color:var(--primary-color) !important;
    cursor: pointer;
}

@media only screen and (max-width:575px) {
    .footer_logo, .customer_service, .categories, .quick_links, .my_account, .social_links, div .social_icons a i {
        text-align: center !important;
    }
}
</style>
<footer class="footer container-fluid px-4 pt-5 pb-3">
    <div class="row flex-wrap align-items-top justify-content-space-between pb-1">
        <div class="footer_logo col-lg-2 col-md-4 col-sm-4 col-12 text-start text-white px-2 py-2">
            <a href="/">
                <img src="{{ asset('image/login-logo.svg') }}" class="logo-img mt-4" alt="logo"/>
            </a>
        </div>
        <div class="customer_service col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">CUSTOMER SERVICE</h5>
            <p>
                <a href="/contact" class="text-decoration-none text-white footer_a">Contact Us</a>
            </p>
            <p>
                <a href="/faqs" class="footer_a text-decoration-none text-white">FAQs</a>
            </p>
            <p>
                <a href="/termsandcondition" class="footer_link text-decoration-none text-white">Privacy Policy</a>
            </p>
            <p>
                <a href="/termsandcondition" class="footer_link text-decoration-none text-white">Terms and Condition</a>
            </p>
        </div>
        {{-- <div class="categories col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3"></h5>
            <p class="footer_link text-decoration-none text-white">
                Tools & Accessories
            </p>

            <p class="footer_link text-decoration-none text-white">
                Safety & Protection
            </p>

            <p class="footer_link text-decoration-none text-white">
                Lighting Fixtures
            </p>

            <p class="footer_link text-decoration-none text-white">
                Switches & Outlets
            </p>
        </div> --}}
        <div class="quick_links col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">QUICK LINKS</h5>
            <p>
                <a href="/" class="footer_link text-decoration-none text-white">Home</a>
            </p>
            <p>
                <a href="/product" class="footer_link text-decoration-none text-white">About</a>
            </p>
            <p>
                <a href="/blog" class="footer_link text-decoration-none text-white">Jobs</a>
            </p>
        </div>
        <div class="my_account col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">MY ACCOUNT</h5>
            @if(!Auth::check())
            <p>
                <a href="{{ route('create.seeker') }}" class="footer_link text-decoration-none text-white">Seeker Register</a>
            </p>
            <p>
                <a href="route('create.employer')" class="footer_link text-decoration-none text-white">Employer Register</a>
            </p>
            @endif
            @if(Auth::check())
            @if(auth()->user()->user_type === 'seeker')
            <p>
                <a href="/cart" class="footer_link text-decoration-none text-white">Profile</a>
            </p>
            <p>
                <a href="/wishlist" class="footer_link text-decoration-none text-white">Job Applied</a>
            </p>
            @else
            <p>
                <a href="/wishlist" class="footer_link text-decoration-none text-white">Dashboard</a>
            </p>
            @endif
            <p>
                <a href="/wishlist" class="footer_link text-decoration-none text-white" id="logout">Logout</a>
            </p>
            @endif
            <form id="form-logout" action="{{ route('logout') }}" method="post" >@csrf</form>

        </div>
        
        <div class="social_links col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">SOCIAL LINKS</h5>
            <div class="social_icons align-items-center justify-content-start">
                <a href="https://www.facebook.com/jas.bagor/" target="_blank" class="mx-2 text-white text-decoration-none">
                    <i class="footer_link bi bi-facebook fs-4"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCTNYaiZxQGNiNLFg8VosSpw" target="_blank" class="mx-2 text-white text-decoration-none">
                    <i class="footer_link bi bi-youtube fs-4"></i>
                </a>
                <a href="https://www.tiktok.com/@jasbgr" target="_blank" class="mx-2 text-white text-decoration-none">
                    <i class="footer_link bi bi-tiktok fs-4"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer_copyright container-fluid px-4 pt-4 mt-4 pb-0">
        <p class="text-white my-auto text-center">Copyright © 2024 <span class="fw-semibold">splenr</span>. All rights reserved.</p>
    </div>
</footer>


