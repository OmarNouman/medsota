@extends('frontend.includes.main')
@section('title')
    Homepage
@endsection
@section('body')
    <!-- header-start -->
    <header>
        <div class="header-top-area pl-165 pr-165">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-6 col-md-6">
                        <div class="header-top-wrapper">
                            <div class="header-top-info d-none d-xl-block f-left">
                                <span>
                                    <i class="fas fa-heart"></i> Welcome to Medsota. We provides medical accessories
                                </span>
                            </div>
                            <div class="header-link f-left">
                                <span>
                                    <a href="#">
                                        <i class="far fa-phone"></i>
                                        {{ $site_settings['phone_number']->value }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="header-top-right text-md-right">
                            <div class="shop-menu">
                                <ul>
                                    <li><a href="register.html"><i class="fal fa-user-circle"></i> My Account</a></li>
                                    <li><a href="cart.html"><i class="far fa-cart-plus"></i> Cart</a></li>
                                    <li><a href="wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-menu-area menu-01 pl-165 pr-165">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/images/frontend/logo/logo.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                        <div class="header-right f-right">
                            <div class="header-lang f-right pos-rel d-none d-md-none d-lg-block">
                                <div class="lang-icon">
                                    <img src="{{ asset('assets/images/frontend/icon/flag.png') }}" alt="">
                                    <a href="#"><i class="far fa-angle-down"></i></a>
                                </div>
                                <ul class="header-lang-list">
                                    <li><a href="#">USA</a></li>
                                    <li><a href="#">UK</a></li>
                                    <li><a href="#">CA</a></li>
                                    <li><a href="#">AU</a></li>
                                </ul>
                            </div>
                            <div class="menu-bar info-bar f-right d-none d-md-none d-lg-block">
                                <a href="#"><i class="fal fa-bars"></i></a>
                            </div>
                            <div class="header-search f-right d-none d-xl-block">
                                <form class="header-search-form">
                                    <input placeholder="Search" type="text">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="index.html">home</a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="index.html">home 1</a></li>
                                            <li><a href="index-2.html">home 2</a></li>
                                            <li><a href="index-3.html">home 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-grid.html">Shop</a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="shop-grid.html">shop grid</a>
                                            <li><a href="shop-full-width.html">shop full width</a>
                                            <li><a href="shop-04-column.html">shop 04 column</a>
                                            <li><a href="shop-left-02-column.html">shop left 02 column</a>
                                            <li><a href="shop-left-sidebar.html">shop left sidebar</a>
                                            <li><a href="shop-right-sidebar.html">shop right sidebar</a>
                                            <li><a href="product-details.html">product details</a>
                                            <li><a href="wishlist.html">wishlist</a>
                                            <li><a href="checkout.html">checkout</a>
                                            <li><a href="cart.html">cart</a>
                                            <li><a href="login.html">login</a>
                                            <li><a href="register.html">register</a>

                                        </ul>
                                    </li>
                                    <li><a href="shop-grid.html">Categories </a></li>
                                    <li><a href="blog-grid.html">Blog</a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-grid-sidebar.html">blog grid sidebar</a></li>
                                            <li><a href="blog-standard.html">blog standardr</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index.html">
                    <img src="{{ asset('assets/images/frontend/logo/white-logo.png') }}" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                    <p>+(090) 8765 86543 85</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                    <p>example.mail@hum.com</p>
                </div>
            </div>
            <div class="instagram">
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
            </div>
            <div class="social-icon-right mt-20">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </header>
    <!-- header-start -->

    <main>

        <!-- hero-area start -->
        <section class="hero-area">
            <div class="hero-slider">
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center"
                        data-background="{{ asset('assets/images/frontend/slider/01.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-text mt-90">
                                        <div class="hero-slider-caption ">
                                            <span data-animation="fadeInUp" data-delay=".2s">covid -19 products</span>
                                            <h2 data-animation="fadeInUp" data-delay=".4s">Face Mask
                                                Thermometer</h2>
                                            <p data-animation="fadeInUp" data-delay=".6s">Quis autem vel eum iure
                                                reprehenin voluptate
                                                velit esse quam nihil molestiae conse</p>
                                        </div>
                                        <div class="hero-slider-btn">
                                            <a data-animation="fadeInUp" data-delay=".8s" href="contact.html"
                                                class="c-btn">shop now <i class="far fa-plus"></i></a>
                                            <div class="b-button" data-animation="fadeInUp" data-delay="1s"
                                                style="animation-delay: 1s;">
                                                <a href="contact.html">hot collection <i class="far fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <div class="slider-img d-none d-lg-block" data-animation="fadeInRight"
                                        data-delay=".8s">
                                        <img src="{{ asset('assets/images/frontend/slider/01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->

        <!-- banner-area-start -->
        <div class="banner-area banner-pb pt-30 pb-70 pl-55 pr-55">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="banner-wrapper mb-30">
                            <div class="banner-img pos-rel">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/images/frontend/banner/01.jpg') }}" alt=""></a>
                                <div class="banner-text">
                                    <span>Digital Meter</span>
                                    <h2>Thermometer</h2>
                                    <div class="b-button red-b-button">
                                        <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="banner-wrapper mb-30">
                            <div class="banner-img pos-rel">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/images/frontend/banner/02.jpg') }}" alt=""></a>
                                <div class="banner-text">
                                    <span>Gun Covid -19</span>
                                    <h2>Temperature</h2>
                                    <div class="b-button red-b-button">
                                        <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="banner-wrapper mb-30">
                            <div class="banner-img pos-rel">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/images/frontend/banner/03.jpg') }}" alt=""></a>
                                <div class="banner-text">
                                    <span>Pulse</span>
                                    <h2>Oximeter</h2>
                                    <div class="b-button red-b-button">
                                        <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-wrapper mb-30">
                            <div class="banner-img pos-rel">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/images/frontend/banner/04.jpg') }}" alt=""></a>
                                <div class="banner-text">
                                    <span>Lab Surgery</span>
                                    <h2>N95 Face Mask</h2>
                                    <div class="b-button red-b-button">
                                        <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-wrapper mb-30">
                            <div class="banner-img pos-rel">
                                <a href="product-details.html"><img
                                        src="{{ asset('assets/images/frontend/banner/05.jpg') }}" alt=""></a>
                                <div class="banner-text">
                                    <span>Surgery Lab</span>
                                    <h2>Hand Gloves</h2>
                                    <div class="b-button red-b-button">
                                        <a href="contact.html">shop now <i class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- product-area-start -->
        <div class="product-area pb-50">
            <div class="container">
                <div class="tab-border mb-60">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="section-title mb-25">
                                <h2>Features Products</h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="product-tab mb-25">
                                <ul class="nav justify-content-start justify-content-lg-end product-nav" id="myTab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">
                                            <i class="far fa-shield-check"></i> Best Seller
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="far fa-star"></i> Top Rated
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="far fa-star"></i> Popular
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Medical Microscope</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand sanitizer</h5>
                                            <h4><a href="product-details.html">Hand Sanitizer Covid -19</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>home accessories</h5>
                                            <h4><a href="product-details.html">Medical Thermometer</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Lab N95 Face Mask</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand gloves</h5>
                                            <h4><a href="product-details.html">Covid -19 Hand Gloves</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>medical equipment</h5>
                                            <h4><a href="product-details.html">New Temperature Gun</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Medical Microscope</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>home accessories</h5>
                                            <h4><a href="product-details.html">Medical Thermometer</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand sanitizer</h5>
                                            <h4><a href="product-details.html">Hand Sanitizer Covid -19</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Lab N95 Face Mask</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand gloves</h5>
                                            <h4><a href="product-details.html">Covid -19 Hand Gloves</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>medical equipment</h5>
                                            <h4><a href="product-details.html">New Temperature Gun</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Medical Microscope</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/02.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand sanitizer</h5>
                                            <h4><a href="product-details.html">Hand Sanitizer Covid -19</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/03.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>home accessories</h5>
                                            <h4><a href="product-details.html">Medical Thermometer</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/04.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>accessories</h5>
                                            <h4><a href="product-details.html">Lab N95 Face Mask</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/01.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>medical equipment</h5>
                                            <h4><a href="product-details.html">New Temperature Gun</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 cl-lg-4 col-md-6">
                                    <div class="product-wrapper text-center mb-45">
                                        <div class="product-img pos-rel">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/images/frontend/products/05.jpg') }}"
                                                    alt="">
                                                <img class="secondary-img"
                                                    src="{{ asset('assets/images/frontend/products/06.jpg') }}"
                                                    alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                                <a class="c-btn" href="#">add to cart <i
                                                        class="far fa-plus"></i></a>
                                                <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <h5>hand gloves</h5>
                                            <h4><a href="product-details.html">Covid -19 Hand Gloves</a></h4>
                                            <span>$250.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- product-area-end -->

        <!-- deal-area-start -->
        <div class="deal-area pb-50 pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center mb-65">
                            <h2>Deal Of This Week</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                        <div class="deal-wrapper text-center">
                            <div class="deal-count">
                                <div class="deal-time" data-countdown="2020/9/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- deal-area-end -->

        <!-- banner-area-start -->
        <div class="banner-02-area pb-70 pl-165 pr-165">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#edf7fb">
                            <div class="banner-02-text">
                                <span>Digital Meter</span>
                                <h2>Blood Pressure Meter</h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="{{ asset('assets/images/frontend/banner/b-01.png') }}"
                                        alt=""></a>
                                <span class="banner-tag">hot</span>
                            </div>
                            <div class="banner-price">
                                <span class="old-price">$250.99</span>
                                <span class="new-price">$239.99</span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f8f8f8">
                            <div class="banner-02-text">
                                <span>Digital Meter</span>
                                <h2>Blood Pressure Meter</h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="{{ asset('assets/images/frontend/banner/b-02.png') }}"
                                        alt=""></a>
                                <span class="banner-tag">hot</span>
                            </div>
                            <div class="banner-price">
                                <span class="old-price">$250.99</span>
                                <span class="new-price">$239.99</span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner-02-wrapper text-center mb-30" data-bg-color="#f3f8ff">
                            <div class="banner-02-text">
                                <span>Digital Meter</span>
                                <h2>Blood Pressure Meter</h2>
                            </div>
                            <div class="banner-02-img pos-rel">
                                <a href="#"><img src="{{ asset('assets/images/frontend/banner/b-03.png') }}"
                                        alt=""></a>
                                <span class="banner-tag">hot</span>
                            </div>
                            <div class="banner-price">
                                <span class="old-price">$250.99</span>
                                <span class="new-price">$239.99</span>
                            </div>
                            <div class="banner-button">
                                <a class="c-btn" href="#">buy now <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-area-end -->

        <!-- product-area-start -->
        <div class="product-area pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="section-title mb-30">
                            <h2>Features Products</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="b-button shop-btn s-btn text-md-right mb-30">
                            <a href="contact.html">view all product <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-08.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5>face mask</h5>
                                <h4><a href="product-details.html">Lab N98 Face Mask</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-01.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <span class="product-tag hot-1">Hot</span>
                            <div class="product-text">
                                <h5>sanitizer</h5>
                                <h4><a href="product-details.html">Hand Sanitizer</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-02.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5>home accessories</h5>
                                <h4><a href="product-details.html">Inhaler Pressure Drop</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-03.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <span class="product-tag hot-2">new</span>
                            <div class="product-text">
                                <h5>medical meter</h5>
                                <h4><a href="product-details.html">Temperature Gun</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-04.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <span class="product-tag hot-2">new</span>
                            <div class="product-text">
                                <h5>hand gloves</h5>
                                <h4><a href="product-details.html">Lab Hand Gloves</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-05.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <span class="product-tag hot-1">new</span>
                            <div class="product-text">
                                <h5>medical meter</h5>
                                <h4><a href="product-details.html">Digital Thermometer</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-06.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5>hand sanitizer</h5>
                                <h4><a href="product-details.html">hand sanitizer</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-02-wrapper pos-rel text-center mb-30">
                            <div class="product-02-img pos-rel">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/frontend/products/p-07.png') }}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="action-btn" href="#"><i class="far fa-heart"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-cart-plus"></i></a>
                                    <a class="action-btn" href="#"><i class="far fa-search"></i></a>
                                </div>
                            </div>
                            <span class="product-tag hot-3">-30%</span>
                            <div class="product-text">
                                <h5>personal</h5>
                                <h4><a href="product-details.html">Health Medicine</a></h4>
                                <span>$250.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area-end -->

        <!-- testimonial-area-start -->
        <div class="testimonial-area pt-100 pb-175" data-background="{{ asset('assets/images/frontend/bg/test.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center mb-65">
                            <h2>What Our Client’s Say</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="row test-active">
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="{{ asset('assets/images/frontend/testimonial/01.png') }}" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium
                                    totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo.</p>
                                <h4>Sebastian Barry</h4>
                                <span>Business Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="{{ asset('assets/images/frontend/testimonial/02.png') }}" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium
                                    totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo.</p>
                                <h4>Oliver Greenwood</h4>
                                <span>Business Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="{{ asset('assets/images/frontend/testimonial/01.png') }}" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium
                                    totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo.</p>
                                <h4>Sebastian Barry</h4>
                                <span>Business Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-wrapper">
                            <div class="inner-test d-flex justify-content-between align-items-center">
                                <div class="test-img">
                                    <img src="{{ asset('assets/images/frontend/testimonial/02.png') }}" alt="">
                                </div>
                                <div class="test-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="test-text">
                                <p>Sed perspiciatis unde omnis iste natus erolup tatem accusantium doloremque laudantium
                                    totam reperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo.</p>
                                <h4>Oliver Greenwood</h4>
                                <span>Business Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-105 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                        <div class="section-title text-center mb-65">
                            <h2>Latest News & Blog</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img pos-rel">
                                <a href="blog-details.html"><img src="{{ asset('assets/images/frontend/blog/01.jpg') }}"
                                        alt=""></a>
                                <span class="blog-tag color-1">covid -19</span>
                            </div>
                            <div class="blog-text">
                                <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug
                                            2020</a></span>
                                </div>
                                <h4><a href="blog-details.html">Mirage Deep Dive Under anding Timin Response</a></h4>
                                <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                <div class="b-button gray-b-button">
                                    <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img pos-rel">
                                <a href="blog-details.html"><img src="{{ asset('assets/images/frontend/blog/02.jpg') }}"
                                        alt=""></a>
                                <span class="blog-tag color-2">sanitizer</span>
                            </div>
                            <div class="blog-text">
                                <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug
                                            2020</a></span>
                                </div>
                                <h4><a href="blog-details.html">How To Feel More Energe Even You’re Stuck</a></h4>
                                <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                <div class="b-button gray-b-button">
                                    <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper mb-30">
                            <div class="blog-img pos-rel">
                                <a href="blog-details.html"><img src="{{ asset('assets/images/frontend/blog/03.jpg') }}"
                                        alt=""></a>
                                <span class="blog-tag color-1">medical</span>
                            </div>
                            <div class="blog-text">
                                <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Aug
                                            2020</a></span>
                                </div>
                                <h4><a href="blog-details.html">Learning Resourc Challe
                                        Ging Online Work</a></h4>
                                <p>Sedut perspiciatis unde omnis natus error sit voluptatem accusantium </p>
                                <div class="b-button gray-b-button">
                                    <a href="blog-details.html">read more <i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area-end -->

        <!-- brand-area-start -->
        <div class="brand-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/01.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/02.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/03.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/04.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/05.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/06.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/07.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/08.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/09.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/10.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/11.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <div class="single-brand mb-60">
                            <img src="{{ asset('assets/images/frontend/brand/12.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- features-area-start -->
        <div class="features-area pt-60 pb-30 grey-2-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-1 f-left">
                                <i class="fal fa-ship"></i>
                            </div>
                            <div class="features-text">
                                <h3>Free Shipping</h3>
                                <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-2 f-left">
                                <i class="fal fa-usd-circle"></i>
                            </div>
                            <div class="features-text">
                                <h3>Money Back</h3>
                                <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="features-wrapper mb-30">
                            <div class="features-icon fe-3 f-left">
                                <i class="fal fa-unlock-alt"></i>
                            </div>
                            <div class="features-text">
                                <h3>100% Secure</h3>
                                <p>Sed perspicia unde omnis iste
                                    nat error voluptate accus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features-area-end -->

        <!-- instagram-area-start -->
        <div class="instagram-area pl-130 pr-130">
            <div class="container-fluid">
                <div class="row instagram-active">
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/01.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/02.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/03.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/04.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/05.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/06.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 p-0">
                        <div class="instagram-wrapper">
                            <div class="instagram-img">
                                <a href="#"><img src="{{ asset('assets/images/frontend/instagram/01.jpg') }}"
                                        alt="">
                                    <div class="instagram-icon">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram-area-end -->

    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="footer-area pt-80 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper mb-30">
                            <h3 class="footer-title">About Company</h3>
                            <div class="footer-text">
                                <p>But must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born </p>
                            </div>
                            <div class="footer-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.html">Shipping Options</a></li>
                                    <li><a href="our-history.html">My Wishlist</a></li>
                                    <li><a href="about.html">My Account</a></li>
                                    <li><a href="team.html">Return Policy</a></li>
                                    <li><a href="about.html">Shopping FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-80 mb-30">
                            <h3 class="footer-title">Product</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="about.html">Thermometer</a></li>
                                    <li><a href="our-history.html">Vitamins & Supplements</a></li>
                                    <li><a href="about.html">Temperature Gun</a></li>
                                    <li><a href="team.html">Oxygen Mmeter & Mask</a></li>
                                    <li><a href="about.html">Shipping & Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-wrapper ml-130 mb-30">
                            <h3 class="footer-title">Payment</h3>
                            <div class="footer-img">
                                <img src="{{ asset('assets/images/frontend/footer/footer.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>Copyright <i class="far fa-copyright"></i> 2020 <a href="#">Medibazar</a>. All
                                Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="footer-bottom-link f-right">
                            <ul>
                                <li><a href="#">Home </a></li>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Service </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
@endsection
