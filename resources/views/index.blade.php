@extends('layouts.main')
    @section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="{{ url('/assets/frontend/img/slider1.jpg')}}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="carousel-caption-content p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4">GTZ (India) Pvt Ltd</h1>
                        <h5 class="text-white text-uppercase fw-bold mb-5 fs-5" style="letter-spacing: 3px;">Discover the Magic of chemicals</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                     <div class="about-img pb-5 ps-5">
                        <div class="">
                            <img src="{{ url('/assets/frontend/img/about-cover.webp') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        </div>
                        <div class="mt-2" style="border: 1px solid #ccc;border-radius: 20px;overflow: hidden;">
                            <img src="{{ url('/assets/frontend/img/about-main-gate.webp') }}" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                        <div class="about-experience">40 years experience</div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">About Us</h4>
                        <h1 class="display-3 mb-4">The Chemistry of Excellence</h1>
                        <p class="mb-4">Our determination and commitment to the unrelenting pursuit of excellence is the key to our motivation.</p>
                        <p class="mb-4">GTZ (India) Pvt Ltd, once the Indian arm of US based trading house GETZ Bros & Co Inc started its operations indenting and trading chemicals in 1936. Committed to the philosophy of exceeding by excellence, the company collaborated with a Fortune 500 company, WITCO Corporation USA, a world leader in speciality chemicals in 1985 and ventured into the production of Metal Finishing Chemicals. Ever since GTZ has been engaged in production of world class finishing solutions.</p>
                        
                        <a href="/about-us" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Products Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">What We Do</h4>
                </div>
                <h1 class="display-3 mb-4">Cater To Diverse Industries</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach(allCategories() as $key => $category)
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="{{ getSizedImage($category->featured_image) }}" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light pb-4 pt-2 fixed-height">
                            <div class="course-meta pb-4">
                                <!-- <span class="course-category bold-font"><i class="fa fa-user"></i> 10.8k Sold</span>
                                <div class="course-rate ul-li">
                                    
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="course-category bold-font"> (1.2k) Ratings </span> -->
                            </div>
                            <div class="service-content-inner text-center pt-5">
                                <h4 class="mb-3"> {{ $category->name }}</h4>
                                
                                <!-- <p class="mb-4">{!! $category->description !!}</p> -->
                                <a href="{{ route('view-products',$category->slug) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ url('/products') }}">Check Product Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Feature Start -->
    <!-- <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
                </div>
                <h1 class="display-3 mb-4">Why Choose Us? Get Your Life Style Back</h1>
               
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-diagnoses fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Licensed Therapist</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Personalized Treatment</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-hospital-user fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Therapy Goals</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-users fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Practitioners Network</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-spa fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Comfortable Center</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-heart fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Experienced Stuff</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fab fa-pied-piper fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Therapy Goals</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-user-md fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Licensed Therapist</h5>
                                <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Feature End -->
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Book Appointment End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Under R&D</h4>
                </div>
                <h1 class="display-3 mb-4">Products In Pipeline - API </h1>
               
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>VONOPRAZAN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>BEMPEDOIC ACID</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>IVACAFTOR</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>EFINACONAZOLE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>METHYLENE BLUE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>OZANIMOD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>CENOBAMATE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>FERUMOXYTOL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>LIPOSOMAL MINERALS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>VERICIGUAT</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>FINERENONE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        
                        <div class="team-content text-center border border-primary border-top-0 rounded-bottom py-4">
                            <h5>DORZOLAMIDE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <div class="container team py-5">
        <div class="row" >
            <div class="col-md-4">
                <h4 class="sub-title pe-3 mb-0">Our Footprint</h4>
                <h1 class="display-3 mb-4">Global Presense</h1>
            </div>
            <div class="col-md-8">
                <img src="{{ url('/assets/frontend/img/location-map.jpg') }}" alt="" class="w-100">
            </div>
        </div>
    </div>

    <!-- Book Appointment Start -->
    <div class="container-fluid appointment py-5" style="background-image:linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url({{ url('assets/frontend/img/about-cover.webp') }});">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                    <div class="section-title text-start">
                        <h4 class="sub-title pe-3 mb-0">Connect with us</h4>
                        <h1 class="display-4 mb-4">Get In Touch</h1>
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Get instant support</h5>
                                        <p class="mb-0">Connect with our expert for an answer to what you are looking for.</p>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Still have doubts?</h5>
                                        <p class="mb-0">Let's connect & escalate all the doubts regarding the products!</p>
                                    </div>
                                    <div class="text-start mb-4">
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="appointment-form rounded p-5">
                        @if ($errors->any())
        					<div class="alert alert-danger">
        						<ul>
        							@foreach ($errors->all() as $error)
        								<li>{{ $error }}</li>
        							@endforeach
        						</ul>
        					</div>
        				@endif

        				@if(session()->has('message'))
        					<div class="alert alert-success">
        						{{ session()->get('message') }}
        					</div>
        				@endif
                        <!-- <p class="fs-4 text-uppercase text-primary">Get In Touch</p> -->
                        <form method="post" id="get_in_touch_form" action="{{ route('insert-capture-contact-leads') }}">
                            @csrf
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" name="name" class="form-control py-3 border-primary bg-transparent" placeholder="Full Name" required >
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" name="email" class="form-control py-3 border-primary bg-transparent" placeholder="Email" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="phone" name="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" name="country" class="form-control py-3 border-primary bg-transparent" placeholder="Country/Location" required>
                                </div>
                                <div class="col-xl-6">
                                    <input type="company" name="company" class="form-control py-3 border-primary bg-transparent" placeholder="Company Name" required>
                                </div>
                                <div class="col-xl-6">
                                    <select name="category" class="form-select py-3 border-primary bg-transparent" aria-label="Default select example" required>
                                        <option selected>Select Category</option>
                                        @foreach(allCategories() as $key => $category)
                                        <option value="{{$category->name}}" >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="comment" class="form-control border-primary bg-transparent" name="text" id="area-text" cols="30" rows="5" placeholder="Write Your Enquiry"></textarea>
                                </div>
                                <div class="form-group disclaimer text-left">
                                    <p style="margin:0">
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fab fa-whatsapp" style="color: green;"></i> whatsapp. 
                                    </p>
                                    <p style="margin:0">
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive promotional and marketing material on Email. 
                                    </p>
                                    <p>
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                    </p>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">SUBMIT NOW</button>
                                </div>
                                <div class="col-12">
                                    <input type="hidden" class="formFieldOtpResponse" value="">
                                    <input type="hidden" class="lead_id"  name ="lead_id" value="">
                                    <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">
                                    <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">
                                    <input type="hidden" name ="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >
                                    <input type="hidden" name ="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  
                                    <input type="hidden" name ="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  
                                    <input type="hidden" name ="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  
                                    <input type="hidden" name ="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" >   
                                    <input type="hidden" name ="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  
                                    <input type="hidden" name ="source_url" value="{{ url()->current() }}" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection