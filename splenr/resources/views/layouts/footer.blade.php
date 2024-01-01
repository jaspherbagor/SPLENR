<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;800&display=swap');

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
    --primary-color: #fca311;
    --footer-bg: #000;
    --text-color-light: #fff;
    --text-color-dark: #000;
    --font-family: 'Inter', sans-serif;
}

footer {
    background: var(--footer-bg);
}

.footer_copyright p {
    font-size: 12px
}

.footer_link:hover, p.footer_link:hover {
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
            <Link to="/">
                <img src="" class="logo-img mt-4" alt="logo"/>
            </Link>
        </div>
        <div class="customer_service col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">CUSTOMER SERVICE</h5>
            <p>
                <Link to="/contact" class="text-decoration-none text-white footer_link">Contact Us</Link>
            </p>
            <p>
                <Link to="/termsandcondition" class="footer_link text-decoration-none text-white">Shipping Policy</Link>
            </p>
            <p>
                <Link to="/termsandcondition#returnsandrefunds" class="footer_link text-decoration-none text-white">Return & Refund</Link></p>
            <p>
                <Link to="/faqs" class="footer_link text-decoration-none text-white">FAQs</Link>
            </p>
            <p>
                <Link to="/termsandcondition" class="footer_link text-decoration-none text-white">Privacy Policy</Link>
            </p>
            <p>
                <Link to="/termsandcondition" class="footer_link text-decoration-none text-white">Terms and Condition</Link>
            </p>
        </div>
        <div class="categories col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">CATEGORIES</h5>
            <p class="footer_link text-decoration-none text-white" onClick={() => {
                localStorage.setItem('search', '')
                filterProducts("Tools & Accessories")}}>
                Tools & Accessories
            </p>

            <p class="footer_link text-decoration-none text-white" onClick={() => {
                localStorage.setItem('search', '')
                filterProducts("Safety & Protection")}}>
                Safety & Protection
            </p>

            <p class="footer_link text-decoration-none text-white" onClick={() => {
                localStorage.setItem('search', '')
                filterProducts("Lighting Fixtures")}}>
                Lighting Fixtures
            </p>

            <p class="footer_link text-decoration-none text-white" onClick={() => {
                localStorage.setItem('search', '')
                filterProducts("Switches & Outlets")}}>
                Switches & Outlets
            </p>
        </div>
        <div class="quick_links col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">QUICK LINKS</h5>
            <p>
                <Link to="/" class="footer_link text-decoration-none text-white">Home</Link>
            </p>
            <p>
                <Link to="/product" class="footer_link text-decoration-none text-white">Products</Link>
            </p>
            <p>
                <Link to="/blog" class="footer_link text-decoration-none text-white">Blog</Link>
            </p>
        </div>
        <div class="my_account col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">MY ACCOUNT</h5>
            <p>
                <Link to="/cart" class="footer_link text-decoration-none text-white">Cart</Link>
            </p>
            <p>
                <Link to="/wishlist" class="footer_link text-decoration-none text-white">My Wishlist</Link>
            </p>
        </div>
        
        <div class="social_links col-lg-2 col-md-4 col-sm-4 col-12 text-white text-start px-2 py-2">
            <h5 class="fw-semibold mb-3">SOCIAL LINKS</h5>
            <div class="social_icons align-items-center justify-content-start">
                <a href="https://www.facebook.com/jas.bagor/" target="_blank" class="mx-2 text-white">
                    <i class="footer_link bi bi-facebook fs-4"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCTNYaiZxQGNiNLFg8VosSpw" target="_blank" class="mx-2 text-white">
                    <i class="footer_link bi bi-youtube fs-4"></i>
                </a>
                <a href="https://www.tiktok.com/@jasbgr" target="_blank" class="mx-2 text-white">
                    <i class="footer_link bi bi-tiktok fs-4"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="footer_copyright container-fluid px-4 pt-4 mt-4 pb-0">
        <p class="text-white my-auto text-center">Copyright © 2023 SparkSource Central. All rights reserved.</p>
    </div>
</footer>