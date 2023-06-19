@extends('layouts.main')
@section('main-container')

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/asset 4.jpeg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Reach Out To Us</h1>
                <p>Asian Scales | Asian Electro Weighing Company                </p>
            </div>
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- SErvices and Procuts  -->
  

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Visit Us</h4>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                             <p>C-8, Subhash Nagar, Jawalapur, Haridwar, Uttarakhand – 249407</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Say Hello!</h4>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                               <p> (+91) 9927282775</p>
                                <p>(+91) 8266003266</p>
                                <p>(+91) 9068649995</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Send Your Mail!</h4>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>info@asianscales.com,</p>
                                <p>asianewc@gmail.com,</p>
                            </div>
                            <div class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
    {{--  --}}
            <div class="row pt-5">
                <div class="col-12 col-xl-8 offset-xl-2 text-center">
                    <div class="section-title">
                        <span>SEND AN ENQUIRY</span>
                        <h2>Ready To Work With Us?                        </h2>
                        <p>Contact us with any questions, thoughts or to request a quote. We’re here to help                        </p>
                    </div>
                </div>
    
                <div class="col-12 col-lg-12">
                    <div class="contact-form">                                                        
                        <form action="contact" method="POST" class="row" id="contact-form">
                            @csrf
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
            
                                    <input name="name" type="text" id="fname" placeholder="You Name" >                                         
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="email" type="email" id="email" placeholder="email@domain" >                                         
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="phone" type="text" id="phone" placeholder="You Phone">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="CompanyName" type="text" id="subject" placeholder="Company Name">                                         
                                </div>
                            </div>    
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="address" type="text" id="subject" placeholder="Address">                                         
                                </div>
                            </div>  
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="services" type="text" id="subject" placeholder="Enter Services">                                         
                                    {{-- <select name="" id="">
                                        <option value="">Select Services</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select> --}}
                                </div>
                            </div>                                  
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    
                                    <textarea  name="message" id="message" placeholder="Enter message"></textarea>                                        
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
    </section>

 <div class="conntainer-fluid">
    <div class="row">
        <div class="col-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27663.98726936893!2d78.090218!3d29.921948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390948948546ac87%3A0xeec445808da1dfc6!2sAsian%20Electro%20Weighing%20Company!5e0!3m2!1sen!2sus!4v1687181790348!5m2!1sen!2sus" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
 </div>

@endsection