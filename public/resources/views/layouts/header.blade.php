<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>QuanTech - IT Solution & Technology HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{url('assets/img/favicon.png')}}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{url('assets/css/icons.css')}}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{url('assets/css/metismenu.css')}}">
    <!-- select2 css file -->
    <link rel="stylesheet" href="{{url('assets/css/nice-select2.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{url('style.css')}}">
    
</head>

<body class="body-wrapper">    
    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <div class="txt-loading">
                    <span data-text-preloader="Q" class="letters-loading">
                        Q
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar-wrapper d-none d-sm-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-left">
                <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>987-098-098</a>
                <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@example.com</a>
                <a href="{{url('#')}}"><i class="fal fa-map-marker-alt"></i>
                    <!-- Uttarakhand, -->
                    C-8, Subhash Nagar Haridwar  India
                </a>
            </div>
            <div class="top-right d-none d-md-block">
                <div class="social-pages">
                    <a href="{{url('#')}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="{{url('#')}}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="{{url('#')}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <header class="header-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="assets/img/asset 0.png" class="w-50"  alt="quantech">       
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home <i class="fas "></i></a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="{{url('/')}}">Home 1</a></li>
                                      
                                    </ul> -->
                                </li>
                                <li><a href="{{url('/about')}}">About Us</a> </li>
                                <li><a href="{{url('/projects')}}">Products</a></li>
                                <li><a href="{{url('/services')}}">services</a></li>
                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right-element">
                        <a href="{{url('/contact')}}" class="theme-btn">get a quote</a>
                    </div>
                </div>
                <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger"><i class="fal fa-bars"></i></div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li><a class="has-arrow" href="{{url('/')}}">Homes</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="index')}}">Homepage 1</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="about')}}">about</a></li>
                                    <li><a href="projects')}}">Products</a></li>
                                    <li><a href="services')}}">services</a></li>
                                    <li><a href="contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar text-white">
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h5>visit our location:</h5>
                                        <span>Uttarakhand, India
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Opening Hours:</h5>
                                        <span>Mon-Fri 9am-6pm</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Send us mail</h5>
                                        <span>info@asianscales.com
                                        </span>
                                    </div>
                                </div>
                                <div class="call-us">
                                    <div class="icon text-white">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Phone Number</h5>
                                        <span>(+91) 9927282775</span>
                                    </div>
                                </div>
                                <a href="{{url('/contact')}}" class="theme-btn mt-4">Free Consulting</a>
                            </div>
                        </div> 
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>


    <!-- End Header section -->