@extends('layouts.main')
@section('main-container')

    <div class="page-banner-wrap text-center " style="background-image: url('assets/img/about.png')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>about us</h1>
            </div>
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
 {{-- about section --}}
    <section class="about-wrapper pt-0 mt-5">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-6 col-12 ">
                    <div class="section-title ">
                        <span>ABOUT US</span>
                        <h2>Asian Scales                        </h2>
                  <p class="pe-5">Asian Scales has spent over 25 years advising and working with companies to find ideal solutions in the
                    weight and measurement industry. Our objective has been to supply the best quality weighing instruments 
                    and solutions backed with professional after-sales services to our customers, to achieve this we established 
                     the Asian Electro Weighing Company in 1997 and further reinforced their operations with Legal licensing and
                      certifications. We are approved by the Legal Metrology Department Of Weight & Measurement, Govt. of India. and trusted 
                      consultant in the weight and measurement industry. Our state-of-the-art warehouse in Haridwar, Uttarakhand allows us to have a
                       ready stock of products available for immediate shipment to customers within the entire region of Uttarakhand and nearby states.
                    Asian Scales has a vast network of distributors and partners covering manufacturers and service providers 
                    of electronic weighing instruments and solutions. We put a high value on best-leading technology leading to
                    customer satisfaction. We devote our knowledge and expertise to providing premium quality products and the best 
                     services with a proper consultancy that contributes to better working culture and environment.</p>
                    </div>

                    <div class="row wow fadeInUp">
                        <div class="col-md-6 col-sm-6">
                            <div class="info-icon-item">
                                <img src="{{url('assets/img/asset 1.jpeg')}}" alt="">
                                <p>Santosh Sharma, Proprietor                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/')}}" class="theme-btn mt-30">Learn More</a>
                </div>
                <div class="col-xl-6 col-12 mt-5">
                    <div class="  mb-md-0 mt-5">
                        <img src="{{url('assets/img/about2.png')}}" class="img-fluid" alt="">
                        {{-- <img src="{{url('assets/img/asset 2.jpeg')}}" class="w-75" alt=""> --}}
                       <div class="col-sm-10 card py-4 px-3      ">
                        <div class="card2 px-3 ">
                            <p>
                                <i>“Quality is the byproduct of dedication. Asian Scales strives to deliver
                                    satisfaction to its customers and builds long-lasting trust.”</u>
                                </i>
                        </div>
                          <p class="mt-3 ">Santosh Sharma, Proprietor</p>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- who we are section  --}}

    <section class="best-services-wrapper section-padding bg-cover mt-5" style="background-image: url('assets/img/services-bg.jpg')">
        <div class="container">
            <div class="col-12 col-xl-8 offset-xl-2 col-md-8 offset-md-2 text-center">
                <div class="section-title">
                    <h2>Who We Are</h2>
                    <p>Asian Scales is a dedicated and specialist manufacturer representative Company with head office in 
                        Haridwar, Uttarakhand, India. Asian Scales has spent over 25 years advising and working with companies to
                         find ideal solutions in the weight and measurement industry.
                         We have a vast network of national and international distributors and partners covering manufacturing and after-sale services.</p>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-top-icon wow fadeInUp">
                        {{-- <div class="icon">
                            <img src="{{url('assets/img/icons/desktop.png')}}" alt="">
                        </div> --}}
                        <div class="content">
                            <h4><a >Our Vision</a></h4>
                      <p>Asian Scales has been the name you can trust, and your partner in the weighing &
                        measurement industry since 1997. Our vision is to be the industry’s leading weighing
                       and measurement specialist to ensure precision in every working environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".2s">
                        {{-- <div class="icon">
                            <img src="{{url('assets/img/icons/mobile.png')}}" alt="">
                        </div> --}}
                        <div class="content">
                            <h4><a >Our Mission</a></h4>
                         <p>Asian Scales wants to help you find the product that is right for you. We bridge 
                            the existing gap in the weight & measurement industry by providing the best weighing solutions 
                            and quality services from top national and international manufacturers to our customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-top-icon wow fadeInUp" data-wow-delay=".4s">
                        {{-- <div class="icon">
                            <img src="{{url('assets/img/icons/ux.png')}}" alt="">
                        </div> --}}
                        <div class="content">
                            <h4><a >Who We Are</a></h4>
                           <p>Asian Scales is a dedicated and specialist manufacturer representative Company with head office in Haridwar, 
                            Uttarakhand, India. Asian Scales has spent over 25 years advising and working with companies to find ideal solutions
                             in the weight and measurement industry. </p>
                        </div>
                    </div>
                </div>
               
           
        </div>
    </section>


    {{-- ADVANTAGES --}}
    <section class="work-process-wrapper section-padding">
        <div class="container wow fadeInUp">
            <div class="col-12 text-center">
                <div class="section-title">
                    <span>ADVANTAGES</span>
                    <h2>Why Choose Us</h2>
                    <p>We strive to deliver an excellent customer experience, & 
                        the highest level of reliability & customer service from the very start
                         and always operate with the highest level of genuine integrity in every interaction.</p>
                </div>
            </div>

            <div class="row align-center">
                <div class="col-12 col-lg-5">
                    <div class="single-work-step sp1">
                        <div class="circle-img bg-cover" style="background-image: url('assets/img/asset 5.jpeg')">
                            <span>01</span>
                        </div>
                        <div class="content">
                            <h4>World’s Leading Partners</h4>
                           <p>Our vast knowledge and experience help us provide expert-friendly advice for any requirement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single-work-step sp2">
                        <div class="circle-img bg-cover" style="background-image: url('assets/img/asset 3.jpeg')">
                            <span>02</span>
                        </div>
                        <div class="content">
                            <h4>Professional Services</h4>
                           <p>Our service team consists of highly skilled technicians to provide high-performance service on all makes & models.</p>
                         </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single-work-step sp2">
                        <div class="circle-img bg-cover" style="background-image: url('assets/img/asset 13.jpeg')">
                            <span>03</span>
                        </div>
                        <div class="content">
                            <h4>Expert Advice</h4>
                             <p>Our vast knowledge and experience help us provide expert-friendly advice for any requirement</p>
                            </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single-work-step sp3">
                        <div class="circle-img bg-cover" style="background-image: url('assets/img/about.png')">
                            <span>04</span>
                        </div>
                        <div class="content">
                            <h4>Trust & Quality</h4>
                          <p>Asian Scales has been providing quality and gaining long-lasting trust from its customers for over 25 years.</p>
                        </div>
                    </div>
                </div>

                <div class="work-line">
                    <img src="{{url('assets/img/work-line.png')}}" alt="">
                </div>
            </div>
        </div>
    </section> 

    {{-- team member  --}}
    <section class="team-experts-wrapper section-padding section-bg mb-5">
        <div class="container">
            <div class="col-12 col-xl-8 offset-xl-2 col-md-8 offset-md-2 text-center">
                <div class="section-title">
                    <span>Our Amazing Team</span>
                    <h2>We have Well Experience 
                        Team Members</h2>
                </div>
            </div>
            
            <div class="row wow fadeInUp">
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/1.jpg')">
                        <div class="member-info">
                            <h4><a href="{{url('team-details')}}">Asish Patil</a></h4>
                            <p>Founder & Ceo</p>
                            <div class="social-links">
                                <a href="{{url('#')}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/2.jpg')">
                        <div class="member-info">
                            <h4><a href="{{url('team-details')}}">D. Maria Poddar</a></h4>
                            <p>Designer</p>
                            <div class="social-links">
                                <a href="{{url('#')}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member active text-white bg-cover" style="background-image: url('assets/img/3.jpg')">
                        <div class="member-info">
                            <h4><a href="{{url('team-details')}}">Salman Ahmed</a></h4>
                            <p>Developer</p>
                            <div class="social-links">
                                <a href="{{url('#')}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/4.jpg')">
                        <div class="member-info">
                            <h4><a href="{{url('team-details')}}">RS Rahul</a></h4>
                            <p>Marketer</p>
                            <div class="social-links">
                                <a href="{{url('#')}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{url('#')}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- page banner  --}}
    <div class="page-banner-wrap text-center " style="background-image: url('assets/img/asset 5.jpeg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Request A Call Back!</h1>
                <p>Asian Scales, Your Weighing Instruments & Solutions Partner, Since 1997</p>
            </div>
            <nav>
                <ol class="breadcrumb mt-5">
                    <div class="col-xl-4 mt-4 mb-4 mt-xl-0 text-center">
                        <a href="{{url('/contact')}}" class="theme-btn bg-white">CONTACT US</a>
                    </div>
                </ol>
            </nav>
        </div>
    </div>





@endsection