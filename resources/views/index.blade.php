@extends('layouts.main')
@section('main-container')

    <section class="hero-wrapper hero-1 text-center text-md-start">
        <div class="hero-slider-active">
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/asset\ 29.jpeg'); filter: brightness(0.4);"></div>
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-12 col-xxl-8 col-lg-9 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.3">
                                Your Weighing Instruments & Solutions Partner
                                </h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.6">
                                    Approved by the department of legal metrology weight and measurement, Govt. of India, Since 1997
                                  </p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.9" class="theme-btn me-sm-4 mt-4 animated">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/asset\ 29.jpeg');"></div>
                <div class="container wow fadeInUp">
                    <div class="row">
                        <div class="col-12 col-xxl-8 col-lg-9 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h6 class="animated" data-animation-in="fadeInDown">Quan Tech IT Systems</h6>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.3">Creative Idea To Excellent Products</h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.6">We are 100+ professional software engineers with more than <br>10 years of experience in delivering superior products.</p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.9" class="theme-btn me-sm-4 mt-4 animated">Get Consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="quantechcircle" />
            </symbol>
        </svg>
    </section>

    <section class="our-service-wrapper section-padding">
        <div class="container wow fadeInUp">
            <div class="col-12 col-xl-6 offset-xl-3 text-center">
                <div class="section-title">
                    <h2>We Help you Build and Grow Business</h2>
                </div>
            </div>
            <div class="row ps-xl-5 pe-xl-5">
                <div class="col-xl-4 col-md-6 wow fadeInUp col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="assets/img/icons/solution.svg" alt="">
                        </div>
                        <h4><a href="services-details.html">Professional Services</a></h4>
                        <p>
                            We bring the right people together to get results out of every challenge. 
                            With a team of extensively trained professionals, we strive to
                             deliver long-lasting quality in repairing, remodeling, and yearly maintenance of all types of weighing scales.    
                        </p>
                        <!-- <a href="services-details.html" class="read-more-link">Read More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="assets/img/icons/coding.svg" alt="">
                        </div>
                        <h4><a href="services-details.html">Inovation Solutions</a></h4>
                        <p>We follow a collaborative approach to bridge the gap by partnering with the world’s 
                            top manufacturers in the weighing & measurement industry. We can help match your need 
                            and budget with the right equipment for your application. We got you covered!
                        </p>
                        <!-- <a href="services-details.html" class="read-more-link">Read More</a> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="assets/img/icons/ux-design.svg" alt="">
                        </div>
                        <h4><a href="services-details.html">Expert Consulation</a></h4>
                        <p>We provide technical guidance on the scope and standards of the weight & measurement industry to ensure accuracy and high 
                            productivity rates. Start-up or full-fledged business, we create opportunities for everyone. Let’s connect and grow together!

                        </p>
                        <!-- <a href="services-details.html" class="read-more-link">Read More</a> -->
                    </div>
                </div>


                <!-- <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="assets/img/icons/database.svg" alt="">
                        </div>
                        <h4><a href="services-details.html">Engineering</a></h4>
                        <p>A software engineer is a person applies.</p>
                        <a href="services-details.html" class="read-more-link">Read More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    
{{-- about sections --}}
<section class="about-wrapper pt-0 mt-5">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-xl-6 col-12 ">
                <div class="section-title ">
                    <span>ABOUT US</span>
                    <h2>Asian Scales                        </h2>
              <p class="pe-5">
                Asian Scales is a dedicated and specialist manufacturer representative Company
                 with head office in Haridwar, Uttarakhand, India. Asian Scales has spent over 25 
                 years advising and working with companies to find ideal solutions in the 
                weight and measurement industry. We have a vast network of national and
                 international distributors and partners covering manufacturing and after-sale services. Our flagship
                  operation is to deliver premium quality weighing equipment, and services like
                   Installation, Calibration, Certifications, Repair & Maintenance.
                </p>
                </div>

                <div class="row">
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

    <section class="faq-wrapper left-bg-overlay section-padding bg-gradient">
        <div class="shape-top"><img src="assets/img/top-shape.png" alt=""></div>
        <div class="shape-bottom"><img src="assets/img/left-bottom-shape.png" alt=""></div>
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-xl-6 col-12 mb-5 mb-xl-0">
                    <div class="faq-img">
                        <img src="assets/img/asset 5.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-12 ps-xl-5">
                    <div class="section-title">
                        <!-- <span>faq</span> -->
                        <h2>Frequntly Asked Any Questions</h2>
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion" id="accordion">

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-controls="faq1">
                                    What Is IT Consulting?
                                </button>
                              </h4>
                              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>
                            
                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-controls="faq2">
                                    Can I Get Internet in My Area ?
                                </button>
                              </h4>
                              <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-controls="faq3">
                                    Software Development?
                                </button>
                              </h4>
                              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-controls="faq4">
                                    What is Business Development?
                                </button>
                              </h4>
                              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- counter --}}
    <div class="funfact-box-wrapper section-padding bg-cover bg-primary mt-5" style="background-image: url('assets/img/funfact-bg.')">
        <div class="container wow fadeInUp">
            <div class="row text-center mtm-30 text-white">
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="assets/img/icons/users.svg" alt="">
                        </div>
                        <div class="digits"><span>25250</span>+</div>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="assets/img/icons/task-complete.svg" alt="">
                        </div>
                        <div class="digits"><span>23266</span>K+</div>
                        <p>Successful Installations</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="assets/img/icons/award.svg" alt="">
                        </div>
                        <div class="digits"><span>26</span>+</div>
                        <p>Years Of Experience     </p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


    <!-- SErvices and Procuts  -->
    <section class="best-services-wrapper section-padding">
        <div class="container wow fadeInUp">
            <div class="col-12 col-xl-8 offset-xl-2 wow fadeInUp text-center">
                <div class="section-title">
                    <span> Services & Products</span>
                    <h2>What We Offer</h2>
                    <p>Asian Scales sells & services scales & measurement equipment. Whether you’re 
                         interested in a purchase, installation, calibration, repair, maintenance or legal certifications, we can help.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon d-flex flex-column">
                        <div class="icon">
                            <img src="assets/img/asset 3.jpeg"  alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Weighing Instruments</a></h4>
                         <p>We supply a wide range of weighing equipment from micro balances to weighbridges.
                             We also manufacture in-house bespoke weighing systems based on customer specifications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="assets/img/asset 4.jpeg" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Repair & Maintenance</a></h4>
                         <p>We specialize in after-sale services of installation, calibration, govt. approved certifications,
                             repair, and yearly maintenance of all types of electronic and mechanical weighing equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="assets/img/asset 5.jpeg" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Expert Consultancy</a></h4>
                            <p>We are a trusted advisor in the weight and measurement industry. We provide the most practical solutions
                                 and best possible advice to match your need with the right weighing solutions.</p>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-12 mt-50 text-center">
                <a href="services.html" class="theme-btn">All Services</a>
            </div>
        </div>
    </section>

    <!-- Projects  -->

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container wow fadeInUp">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <span>Our Completed Projects</span>
                        <h2>Explore The Products</h2>
                        <p>Asian Scales supply a wide range of weighing equipment from high precision instruments to heavy capacity scales, 
                            calibration equipment, and electrical/ mechanical components like sensors, piezometers, and more.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev me-2"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            
            <div class="project-showcase-carousel-active text-white">
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 6.png')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>High Precision Instruments</h3>
                        <!-- <p>Design</p> -->
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 7.png')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Medium Capacity Scales</h3>
                        <!-- <p>Development</p> -->
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 8.jpeg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Heavy Capacity Scales</h3>
                        <!-- <p>Game</p> -->
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 2.jpeg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
              
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 7.png')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Medium Capacity Scales</h3>
                        <!-- <p>Development</p> -->
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/asset\ 8.jpeg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Heavy Capacity Scales</h3>
                        <!-- <p>Game</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-cta-wrapper bg-cover section-padding" style="background-image: url('assets/img/asset\ 4.jpeg')">
        <div class="container wow fadeInUp">
            <div class="col-12 offset-xl-2 col-xl-8 offset-md-1 col-md-10 text-center">
                <div class="content-warpper mb-55">
                    <div class="video-play-btn mb-40">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>                     
                    </div>
                    <h1 class="text-white">Preparing For Your Success 
                    Provide Best Innovative Solutions.</h1>
                    <p class="text-white">Appropriate for your specific business, making it easy <br> for 
                    you to have quality  services.</p>
                    <a href="contact.html" class="theme-btn mt-5">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="fun-counter-wrapper text-white">
        <div class="container wow fadeInUp">
            <div class="row ps-md-5 pe-md-5">
             
                <div class="col-lg-4">
                    <div class="single-fun-counter mt bg-cover" style="background-image: url('assets/img/asset\ 13.jpeg')">
                        <div class="count"><span>23</span>k</div>
                        <div class="content">
                            <h3>Happy Customers</h3>
                            <p>To succeed, every Inovation solution must be deeply integrated 
                                into the existing tech environment..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-fun-counter mt bg-cover" style="background-image: url('assets/img/asset\ 18.jpeg')">
                        <div class="count"><span>23</span>k</div>
                        <div class="content">
                            <h3>Happy Customers</h3>
                            <p>To succeed, every Inovation solution must be deeply integrated 
                                into the existing tech environment..</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-fun-counter mt bg-cover" style="background-image: url('assets/img/asset\ 16.jpeg')">
                        <div class="count"><span>23</span>k</div>
                        <div class="content">
                            <h3>Happy Customers</h3>
                            <p>To succeed, every Inovation solution must be deeply integrated 
                                into the existing tech environment..</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{-- team member --}}
    <section class="team-experts-wrapper section-padding section-bg">
        <div class="container wow fadeInUp">
            <div class="col-12 col-xl-8 offset-xl-2 wow fadeInUp col-md-8 offset-md-2 text-center">
                <div class="section-title">
                    <span>Our Amazing Team</span>
                    <h2>We have Well Experience 
                        Team Members</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/1.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">Asish Patil</a></h4>
                            <p>Founder & Ceo</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/2.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">D. Maria Poddar</a></h4>
                            <p>Designer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member active text-white bg-cover" style="background-image: url('assets/img/3.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">Salman Ahmed</a></h4>
                            <p>Developer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/4.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">RS Rahul</a></h4>
                            <p>Marketer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------------we work with---------------------------- -->

    <section class="our-news-section section-padding">
        <div class="container wow ">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <span>INDUSTRIES SERVED</span>
                        <h2>We Worked With</h2>
                        <p>Asian scales has been providing services for all kinds of sectors and collaboratively 
                            approaching every challenge to ensure high productivity rates.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 9.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"></a>Aggreates</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 10.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html">Beauty/Cosmetics</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 11.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html">  Chemical/Pharma</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 12.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html">Energy </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 13.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Food & Beverages</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 14.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Jewelry/Accessory</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 15.webp')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Laboratory</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 16.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html">Medical</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 17.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Manufacturing </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 18.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html">Retail</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 19.webp')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Transportation </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp ">
                    <div class="single-blog-item news-text">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 20.jpeg')">
                        </div>
                        <div class="content text-center">
                            <h3><a href="news-details.html"> Waste & Recycling</a></h3>
                        </div>
                    </div>
                </div>
               
               
            </div>
        </div>
    </section>
<!-- ----------------------------------------------------------------------------- -->


    @endsection