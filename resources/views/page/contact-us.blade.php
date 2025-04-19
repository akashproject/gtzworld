@extends('layouts.main')

    @section('content')

        <!-- Header Start -->

        <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/img/inner-banners.jpg') }});">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-9">
    					<div class="inner-banner-breadcrumb">
    						<span class="breadcrumbElement"> 
    							<a href="https://gtzworld.com/"> Home </a> 
    						</span>
    						<span class="breadcrumbElement"> 
    							 <i class="fas fa-chevron-right"> </i>
    						</span> 
    						<span class="breadcrumbElement"> 
                                {{(isset($contentMain))?$contentMain->name:"Default Page" }}
    						 </span>
    					</div>
    					<div class="inner-banner-content">
    						<div class="inner-banner-title">
    							<h1>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</h1>
    						</div>
    						<div class="inner-banner-description">
                                {!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Header End -->





        <!-- Contact Start -->

        <div class="container-fluid contact py-5" style="background:#fff;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 mb-2">Get in Touch</h2>
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
                        <form method="post" id="get_in_touch_form" action="{{ route('insert-capture-contact-leads') }}">
                            @csrf
                            <div class="row gy-3 gx-4">
                                <div class="col-xl-6">
                                    <input type="text" name="name" class="form-control py-3 border-primary bg-transparent" placeholder="Full Name" required>
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
                                    <input type="company" name="company" class="form-control py-3 border-primary bg-transparent" placeholder="Your Company Name" required>
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
                                    <textarea class="form-control border-primary bg-transparent" name="comment" id="area-text" cols="30" rows="5" placeholder="Write Your Enquiry"  required></textarea>
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
                        </form>
                    </div>

                    

                    <div class="col-lg-7 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">

                        <div class="d-flex justify-content-center mb-4">

                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>

                        </div>

                        <div class="rounded h-100">

                            <iframe class="rounded w-100" 

                            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.1083000405943!2d88.34861407405947!3d22.575052432882853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a531b924c3%3A0x178c2b2c6e4fb57f!2sGTZ%20(INDIA)%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1732213389485!5m2!1sen!2sin" 

                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3 d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Correspondence</h4>
                        <p class="mb-0 ">9, Brabourne Road, Kolkata 700 001, West Bengal, India</p>
                    </div>
                    <div class="col-md-3 d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Manufacturing Site</h4>
                        <p class="mb-0 ">Mouza: Khariberia, P.O.: Bishnupur, Dist. 24 Parganas (South), Pincode: 743 503, West Bengal, India.</p>
                    </div>
                    <div class="col-md-3 d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Phone</h4>
                        <p class="mb-0 " ><a href="tel:+913322429900" class="">+91 33 2242 9900</a></p>
                        <p class="mb-0 " ><a href="tel:+913322429901" class="">+91 33 2242 9901</a></p>

                    </div>
                    <div class="col-md-3 d-flex flex-column align-items-center text-center">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Email</h4>
                        <p class="mb-0"><a href="mailto:connect@gtzworld.com"> connect@gtzworld.com</a></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact End -->

    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection