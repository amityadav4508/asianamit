@extends('layouts.main')
@section('main-container')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/asset 15.webp')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Products</h1>
            </div>
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">projects</li>
                </ol>
            </nav>
        </div>
    </div>

        {{-- projects and  products  --}}

        <section class="best-services-wrapper section-padding products">
            <div class="container">
                <div class="col-12 col-xl-8 offset-xl-2 text-center">
                    <div class="section-title">
                        <span> Services & Products</span>
                        <h2>  Weighing & Measurement Equipment For Every Job</h2>
                     <p>Asian Scales supply a wide range of weighing equipment from high precision 
                        instruments to heavy capacity scales, calibration equipment, and electrical/ mechanical
                         components like all types of sensors, motherboards, electronic circuit boards, to power supply leads. 
                        Our experienced service team calibrates & services all scale makes & models, 
                        including those purchased elsewhere. Connect with us to know more.</p>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-xl-3 col-md-6 ">
                        <div class="single-blog-item news-text">
                            <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset 6.png')">
                            </div>
                            <div class="content text-center ">
                                <h3 class="fs-5"><a href="{{url('/news-details')}}">High Precision Instruments</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 ">
                        <div class="single-blog-item news-text">
                            <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 2.jpeg')">
                            </div>
                            <div class="content text-center">
                                <h3 class="fs-5"><a href="{{url('/news-details')}}">Medium Capacity Scales</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 ">
                        <div class="single-blog-item news-text">
                            <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 7.png')">
                            </div>
                            <div class="content text-center">
                                <h3 class="fs-5"><a href="{{url('/news-details')}}">Heavy Capacity Scales</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 ">
                        <div class="single-blog-item news-text">
                            <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/asset\ 8.jpeg')">
                            </div>
                            <div class="content text-center">
                                <h3 class="fs-5"><a href="{{url('/news-details')}}">Heavy Capacity Scales</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
    
               
            </div>
        </section>
    {{-- counter --}}
    <div class="funfact-box-wrapper section-padding bg-cover bg-primary mt-5" style="background-image: url('assets/img/funfact-bg.')">
        <div class="container">
            <div class="row wow fadeInUp text-center mtm-30 text-white">
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
{{-- about section  1--}}
    <section class="about-wrapper pt-0 mt-5">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xl-6 col-12 ">
                    <div class="section-title ">
                        <h2>
                            High Precision Instruments</h2>
                  <p class="pe-5">
                    Precision measurement devices include instruments used in both laboratory & industrial 
                    settings to measure weight, torque, force, mass, pressure, dimension, temperature & electronic current.
                    The type of precision instrument best suits your application greatly depends 
                    on what is being measured, the level of accuracy required, and the environment in which the device will be used.
                    </p>
                    <p class="pe-5  text-dark">
                     <b>   Asian Scales provide you with a range of laboratory balances suited to fit your needs, including analytical 
                        balances, ultra-micro balances, high-capacity scales, and mass comparators for calibration.</b>
                    </p>
                    </div>

                    <a href="{{url('/')}}" class="theme-btn mt-30">REQUEST A QUOTE</a>
                </div>
                <div class="col-xl-6 col-12 ">
                    <div class="  mb-md-0 ">
                        <img src="{{url('assets/img/asset 6.png')}}" style="height: 400px" class="img-fluid" alt="">
                        {{-- <img src="{{url('assets/img/asset 2.jpeg')}}" class="w-75" alt=""> --}}
                       <div class="col-sm-10 card py-4 px-3      ">
                        <div class="card2 px-3 ">
                            <p>
                                <i>
                                    Asian Scales can help you get the Precision Measurement Equipment
                                     that produces reliable results and get the smallest margin of error possible.
                                </i>
                        </div>
                          <p class="mt-3"><strong>Work with our experts to find the right equipment to fit both your need & your budget.</strong></p>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- 2 --}}
<section class="about-wrapper pt-0 mt-5">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-xl-6 col-12 ">
                <div class="  mb-md-0 ">
                    <img src="{{url('assets/img/asset 6.png')}}" style="height: 400px" class="img-fluid" alt="">
                    {{-- <img src="{{url('assets/img/asset 2.jpeg')}}" class="w-75" alt=""> --}}
                   <div class="col-sm-10 card card3 py-4 px-3      ">
                    <div class="card2 px-3 ">
                        <p>
                            <i>
                        <p>From pallet scales used in warehousing, to counting scales used in food processing, We sells & services the equipment you need.</p>
                            </i>
                    </div>
                      <p class="mt-3">Work with our experts to find the right equipment to fit both your need & your budget.</p>
                   </div>
                    </div>
                </div>
            <div class="col-xl-6 col-12 ">
                <div class="section-title ps-5 text-end">
                    <h2>Medium Capacity Scales                    </h2>
              <p class="">
                Asian Scales sells & services quality equipment from the world’s leading manufacturers. We can help you match 
                your needs with the best equipment options from pallet scales to digital counting scales, each
                 application requires a different tool. We understand the capabilities of each piece of equipment, so that we can recommend the best fit for you.
                </p>
                <p><b>Asian Scales has the equipment to meet specific scale requirements, such as washdown safe scales, or explosion proof boxes.
                    We carry the following medium capacity scales:
                    Bench Scales, Floor Scales, Drum weighers, Counting Scales, Check weighers, Pallet Scales, Forklift Scales, Hanging Scales, Shipping Scales, Platform Scales, Lift Truck Scales</b></p>
               
                <a href="{{url('/')}}" class="theme-btn mt-30">REQUEST A QUOTE</a>

                </div>

            </div>
        </div>
        </div>
    </div>
</section>

{{-- about section  3--}}
<section class="about-wrapper pt-0 mt-5">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-xl-6 col-12 ">
                <div class="section-title ">
                    <h2>Heavy Capacity Scales </h2>
              <p class="pe-5">
                Determining the Best Scale for Your Application
                Factors like frequency of use, application & capacity requirements will determine the type of scale & installation required for your application.
                Environment is a very large component of deciding which type of heavy capacity scale to choose. From special considerations to safety requirements,
                 environment can dictate everything from installation to materials used to build the scale.
            </p>
                <p class="pe-5  text-dark">
                 <b>  
                    We sell the following heavy equipment:
                    Please contact us for information on available equipment.
                    Truck Scales, Portable Truck Scales, Axle Scales, Crane Scale, Load Cells,
                     Tank Scales, Hopper Scales, Rail Scales, Cattle Scales, Platform Scales, Tank Systems, Weigh Bars, Dynamometers, Weigh Modules.
                </b>
                </p>
                </div>

                <a href="{{url('/')}}" class="theme-btn mt-30">REQUEST A QUOTE</a>
            </div>
            <div class="col-xl-6 col-12 ">
                <div class="  mb-md-0">
                    <img src="{{url('assets/img/asset 7.png')}}" style="height: 400px" class="img-fluid" alt="">
                    {{-- <img src="{{url('assets/img/asset 2.jpeg')}}" class="w-75" alt=""> --}}
                   <div class="col-sm-10 card py-4 px-3      ">
                    <div class="card2 px-3 ">
                        <p>
                            <i>
                                Asian Scales distributes & services high-quality heavy-capacity scales.
                                 We also distribute scale accessories that simplify operations, like
                                  remote displays and high-quality indicators.
                            </i>
                    </div>
                      <p class="mt-3"><strong>Work with our experts to find the right equipment to fit both your need & your budget.</strong></p>
                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- about 4 --}}
<section class="about-wrapper pt-0 mt-5">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-xl-6 col-12 ">
                <div class="  mb-md-0 ">
                    <img src="{{url('assets/img/asset 6.png')}}" style="height: 400px" class="img-fluid" alt="">
                    {{-- <img src="{{url('assets/img/asset 2.jpeg')}}" class="w-75" alt=""> --}}
                   <div class="col-sm-10 card card3 py-4 px-3      ">
                    <div class="card2 px-3 ">
                        <p>
                            <i>
                             <p>Quality electronic calibration & test equipment is a safety asset. Don’t trust faulty or old equipment, 
                                contact Asian Scales today to discuss your application & find the right test equipment for you</p>
                            </i>
                    </div>
                      <p class="mt-3">Need to get your test weights certified? We can help with that too.</p>
                   </div>
                    </div>
                </div>
           
            <div class="col-xl-6 col-12 ">
                <div class="section-title ps-5  text-end">
                    <h2>Calibration Equipment</h2>
              <p class="">
                Asian Scales provide & calibrate electronic test instruments & process
                 instruments. We also offer test weight calibration from 50 gm-50 kg of class B, C, E1, E2 & F1, F2
                Certified Test Weights
                Asian Scales has certified test weights from 1 mg to 50 kg blocks available for sale.
                </p>
                <p>
                <b>We carry the following types of process calibrators:</b></p> 

                 <p><b>Current calibrator</b></p> 
              <p><b>Voltage calibrator</b></p> 
              <p><b>Resistance calibrator</b></p> 
              <p><b>Frequency calibrator</b></p> 
              <p><b>Multi-function calibrator</b></p> 
               
                <a href="{{url('/')}}" class="theme-btn mt-30">REQUEST A QUOTE</a>

                </div>

            </div>
        </div>
        </div>
    </div>
</section>


 {{-- page banner  --}}
 <div class="page-banner-wrap text-center " style="background-image: url('assets/img/asset 30.jpeg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Send An Enquiry</h1>
            <p>Asian Scales, Your Weighing Instruments & Solutions Partner, Since 1997</p>
        </div>
        <nav>
            <ol class="breadcrumb mt-5">
                <div class="col-xl-4 mt-4 mb-4 mt-xl-0 text-center">
                    {{-- <a href="{{url('/contact')}}" class="theme-btn bg-white">CONTACT US</a> --}}
                </div>
            </ol>
        </nav>
    </div>
</div>


   
@endsection