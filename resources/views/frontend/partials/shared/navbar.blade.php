<div id="sticky-header" class="main-menu-area menu-01 pl-165 pr-165">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/frontend/logo/logo.png') }}" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                <div class="header-right f-right">
                    {{-- <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                        <div class="lang-icon">
                            <img src="{{ asset('assets/images/frontend/icon/flag.png') }}" alt="">
                            <a href="#">
                                <i class="far fa-angle-down">
                                </i>
                            </a>
                        </div>
                        <ul class="header-lang-list">
                            <li>
                                <a href="#">USA</a>
                            </li>
                            <li>
                                <a href="#">UK</a>
                            </li>
                            <li>
                                <a href="#">CA</a>
                            </li>
                            <li>
                                <a href="#">AU</a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="menu-bar info-bar f-right d-none d-md-none d-lg-block">
                        <a href="#">
                            <i class="fal fa-bars">
                            </i>
                        </a>
                    </div>
                    {{-- <div class="header-search f-right d-none d-xl-block">
                        <form class="header-search-form">
                            <input placeholder="Search" type="text">
                            <button type="submit">
                                <i class="far fa-search">
                                </i>
                            </button>
                        </form>
                    </div> --}}
                </div>
                <div class="main-menu">
                    <nav id="mobile-menu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('all-products') ? 'active' : '' }}">
                                <a href="{{ route('all-products') }}">Products</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="extra-info">
    <div class="close-icon">
        <button>
            <i class="far fa-window-close">
            </i>
        </button>
    </div>
    <div class="logo-side mb-30">
        <a href="index.html">
            <img src="{{ asset('assets/images/frontend/logo/white-logo.png') }}" alt="" />
        </a>
    </div>
    <div class="side-info mb-30">
        <div class="contact-list mb-30">
            <h4>Address</h4>
            <p>Muscat, Oman</p>
        </div>
        <div class="contact-list mb-30">
            <h4>Phone Number</h4>
            <p>+968 1234 5678</p>
            <p>+968 8765 4321</p>
        </div>
        <div class="contact-list mb-30">
            <h4>Email Address</h4>
            <p>info@medsota.com</p>
        </div>
    </div>
    {{-- <div class="instagram">
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p1.jpg') }}" alt="">
        </a>
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p2.jpg') }}" alt="">
        </a>
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p3.jpg') }}" alt="">
        </a>
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p4.jpg') }}" alt="">
        </a>
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p5.jpg') }}" alt="">
        </a>
        <a href="#">
            <img src="{{ asset('assets/images/frontend/portfolio/p6.jpg') }}" alt="">
        </a>
    </div> --}}
    <div class="social-icon-right mt-20">
        {{-- <a href="#">
            <i class="fab fa-facebook-f">
            </i>
        </a> --}}
        {{-- <a href="#">
            <i class="fab fa-twitter">
            </i>
        </a> --}}
        {{-- <a href="#">
            <i class="fab fa-google-plus-g">
            </i>
        </a> --}}
        <a href="#">
            <i class="fab fa-instagram">
            </i>
        </a>
    </div>
</div>
