<!-- Footer Start -->

<div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s" style="background-image:linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url({{ url('assets/frontend/img/about-cover.webp') }});visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <a href="{{ url('/') }}" class="navbar-brand p-0" style="width: 50%;">
                        <img src="{{ url('assets/frontend/img/logo.png') }}" class="img-fluid w-100" alt="Image">
                    </a>
                    <p class="m-0 p-0" style="line-height: 20px;"> <a href="mail:connect@gtzworld.com">Mail ID : connect@gtzworld.com</a></p>
                    <p class="m-0 p-0" style="line-height: 20px;"> 
                        <a href="tel:3322429900">Phone : +91 33 2242 9900</a> /
                    </p>
                    <p class="m-0 p-0 mb-3" style="line-height: 20px;"> 
                        <a href="tel:3322429901"> +91 33 2242 9901 </a>
                    </p>
                    
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/gtzindiapvtltd"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://x.com/GTZIndiaPvtLtd"><i class="fab fa-twitter"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.linkedin.com/company/gtz-pvt-ltd"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Quick Links</h4>
                    <a href="{{ url('/about-us') }}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="{{ url('/contact-us') }}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                    <a href="{{ url('/privacy-policy') }}"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="{{ url('/term-conditions') }}"><i class="fas fa-angle-right me-2"></i> Terms &amp; Conditions</a>
                    <a href="{{ url('/blogs') }}"><i class="fas fa-angle-right me-2"></i> Our Blog &amp; News</a>
                    <a href="{{ url('/gallery') }}"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Categories</h4>
                    @foreach(allCategories() as $key => $category)
                    <a href="{{ route('view-products',$category->slug) }}"><i class="fas fa-angle-right me-2"></i>{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Address</h4>
                    <p style="line-height: 20px;"> Head Office :<br> GTZ (INDIA) PVT LTD. <br> 9, Brabourne Road, Kolkata, 700 001, West Bengal, India </p>
                    <p style="line-height: 20px;"> Manufacturing Site :<br>GTZ (INDIA) PVT LTD. <br>Mouza: Khariberia, P.O.: Bishnupur, Dist. 24 Parganas (South), Pincode: 743 503, West Bengal, India. </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center" >
                <p> © {{ date("Y") }} - GTZ (INDIA) PVT LTD. All rights reserved </p>
            </div>
        </div>
    </div>
</div>

<div id="lead-generate-popup" class="white-popup mfp-hide">

    <h5 class="text-center">GET IN TOUCH</h2>

     @include('common.leadCaptureForm')

</div>