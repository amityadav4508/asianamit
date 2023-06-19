@extends('layouts.main')
@section('main-container')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/asset 4.jpeg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Our Services</h1>
            </div>
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- SErvices and Procuts  -->
    <section class="best-services-wrapper section-padding">
        <div class="container">
            <div class="col-12 col-xl-8 offset-xl-2 text-center">
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
                            <img src="{{url('assets/img/services1.png')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Consultation</a></h4>
                         <p>We provide technical guidance on the scope and standards of the weight & measurement industry to ensure 
                            accuracy and high productivity rates by matching your need and budget with the right weighing solution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="{{url('assets/img/services2.png')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Weighing Equipment      </a></h4>
                        <p>From high-precision instruments to heavy-duty industrial scales, Asian Scales can help you 
                            find the right equipment for your application, from a wide range of quality manufacturers you can trust.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="{{url('assets/img/services3.png')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Expert Installation</a></h4>
                            <p>Trust the experts with your scale installation. We make sure to complete each step of the
                             process correctly before moving on to the next. This helps keep your team safe & your measurements reliable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="{{url('assets/img/about2.png')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Calibration             </a></h4>
                           <p>Inaccurate scales & measurement equipment can cost you money, time,
                             and quality. Therefore, regular calibration is important.
                             Calibration is performed by state-licensed, experienced technicians,
                              with certified test weights, and must be traceable to be valid.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="{{url('assets/img/services4.png')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Inspection/Certification                            </a></h4>
                       <p>We offer inspection & scale certification in all capacities from micro lab balances to heavy duty industrial scales.
                        Either send your equipment to us for inspection or request a service call to
                         have one of our highly skilled service technicians visit your site.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 ">
                    <div class="single-service-left-icon  d-flex flex-column">
                        <div class="icon">
                            <img src="{{url('assets/img/asset 4.jpeg')}}" alt="">
                        </div>
                        <div class="content mt-5">
                            <h4><a href="services-details.html">Repair & Maintenance  </a></h4>
                           <p>We are legal licensees and experts in repairing & maintaining all kinds
                             of makes and models. With regularly scheduled scale maintenance, 
                            we can help eradicate any potential issues that would cause the measurement equipment to malfunction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--  --}}
    <section class="work-process-wrapper section-padding">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-6">
                    <div class="col-12 text-start">
                        <div class="section-title">
                            <span>APPROACH</span>
                            <h2>How We work   </h2>
                            <p>From precision instruments like lab balances to warehouse scales & industrial scales & equipment, we’ve got you covered.</p>
                        </div>
                    </div>
                    
                     <div class="col-sm-lg-4 mt-5 mb-5 col-12 d-flex justify-content-space-between text-start">
                         <div class="col-lg-3 fs-1 mb-3 mt-3 ">
                                 <span>01</span>
                             </div>
                             <div class="col-lg-8 content">
                                 <h4>Expert Advice</h4>
                                 <p>he Asian Scale consultancy team provides unmatched support, to help keep your equipment, and your operations, running at peak productivity.</p>
                                </div>
                         </div>
                         <div class="col-sm-lg-4 mt-5 mb-5 col-12 d-flex justify-content-space-between text-start">
                            <div class="col-lg-3 fs-1 mb-3 mt-3 ">
                                    <span>01</span>
                                </div>
                                <div class="col-lg-8 content">
                                    <h4>All Makes & Models</h4>
                                <p>Asian Scales offers every kind of weighing equipment & scale service on all makes & models, including equipment purchased elsewhere.</p>                                 </div>
                            </div>
                            <div class="col-sm-lg-4 mt-5 mb-5 col-12 d-flex justify-content-space-between text-start">
                                <div class="col-lg-3 fs-1 mb-3 mt-3 ">
                                        <span>01</span>
                                    </div>
                                    <div class="col-lg-8 content">
                                        <h4>Service Agreement    </h4>
                                     <p>
                                        We offer service agreements to help you save money on scheduled maintenance,
                                         ensure accuracy between inspections, protect your scale & reduce downtime with round-the-clock support.
                                     </p>
                                    </div>
                                </div>
                            </div>
                     <div class="col-12 col-lg-6 mt-5">
                    <div class=" ">
                        <div class=" bg-cover"  style="background-image: url('assets/img/asset 18.jpeg'); height: 850px"  >
                        </div>
                    </div>
                </div>
            </div>
                <div class="work-line">
                <img src="{{url('assets/img/work-line.png')}}" alt="">
                </div>
            </div>
        </div>
    </section> 

    {{-- counter --}}
    <div class="funfact-box-wrapper section-padding bg-cover bg-primary  mb-5" style="background-image: url('assets/img/funfact-bg.')">
        <div class="container">
            <div class="col-12 col-xl-8 offset-xl-2 text-center">
                <div class="section-title text-white">
                    <span> ACHIEVEMENTS</span>
                    <h2>We Are Proud Of</h2>
                </div>
            </div>

            <div class="row text-center mtm-30 text-white">
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="{{url('assets/img/icons/users.svg')}}" alt="">
                        </div>
                        <div class="digits"><span>25250</span>+</div>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="{{url('assets/img/icons/task-complete.svg')}}" alt="">
                        </div>
                        <div class="digits"><span>23266</span>K+</div>
                        <p>Successful Installations</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-digit-count">
                        <div class="icon">
                            <img src="{{url('assets/img/icons/award.svg')}}" alt="">
                        </div>
                        <div class="digits"><span>26</span>+</div>
                        <p>Years Of Experience     </p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

     {{-- page banner  --}}
 <div class="page-banner-wrap  mt-5 " style="background-image: url('assets/img/asset 30.jpeg')">
    <div class="container">
       <div class="page-heading text-white text-center">
        <h1>Send An Enquiry</h1>
        <p>Ready to work with us? Connect with Asian Scales, We are here to help you out.        </p>
    </div>
   
    <div class="col-12 col-lg-12 service-enquiry  ">
        <div class="contact-form">                                                        
            <form action="mail.php" class="row" id="contact-form">
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">

                        <input type="text" id="fname" placeholder="You Name" >                                         
                    </div>
                </div>                            
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">
                        <input type="email" id="email" placeholder="email@domain" >                                         
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">
                        <input type="text" id="phone" placeholder="You Phone">                                         
                    </div>
                </div>                                      
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">
                        <input type="text" id="subject" placeholder="Company Name">                                         
                    </div>
                </div>    
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">
                        <input type="text" id="subject" placeholder="Address">                                         
                    </div>
                </div>  
                <div class="col-md-6 col-12">
                    <div class="single-personal-info">
                        {{-- <input type="text" id="subject" placeholder="Enter Address">                                          --}}
                        <select name="" id="">
                            <option value="">Select Services</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>                                  
                <div class="col-md-12 col-12">
                    <div class="single-personal-info">
                        
                        <textarea id="message" placeholder="Enter message"></textarea>                                        
                    </div>
                </div>                                      
                <div class="col-md-12 col-12 text-center">
                    <input class="submit-btn" type="submit" value="SEND">
                </div>                                      
            </form>
        </div>
    </div>


    </div>
</div>



@endsection