@extends('layouts.main')
    @section('content')
    <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/category/'.$topParentCategory->slug.'.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="background-image: linear-gradient(to right, #040404a3, #fcfcfc00);">
                    <div class="inner-banner-breadcrumb">
                        <span class="breadcrumbElement"> 
                            <a href="https://www.gtzworld.com/"> Home </a> 
                        </span>

                        <span class="breadcrumbElement"> 
                            <i class="fas fa-chevron-right"> </i>
                        </span> 
                        <span class="breadcrumbElement"> 
                            {{(isset($contentMain))?$contentMain->name:"All Products" }}
                        </span>
                    </div>
                    <div class="inner-banner-content">

                        <div class="inner-banner-title">
                            <h1>{{(isset($contentMain))?$contentMain->name:"All Products" }}</h1>
                        </div>
                        <div class="inner-banner-description">
                            {!! (isset($contentMain))?$contentMain->description:"All Products" !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    

                </div>
            </div>
        </div>
    </section>

    <section>
    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container ">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h2 class="display-3 mb-4">Product Description</h2>
                        <h3 class="mb-4">The real catalyst</h3>
                        <p class="mb-2">We do what we do for society and our clients.</p>
                        <p class="mb-2">Their requirements are our motivation.</p>
                        <p class="mb-4">We are driven relentlessly to innovate, adopt and adapt to meet their trust reposed in us. This has led to a widespread clientele not only throughout India, but in many countries, Ethiopia, China, India, Kenya, South Africa, Germany, Indonesia, Togo, West Africa, Bangladesh, UAE, Nigeria, Tanzania, Korea, Egypt, Sri Lanka</p>
                    </div>
                </div>

                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="https://dummyimage.com/500x300" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    </section>

    <section><!-- About Start -->
        <div class="container-fluid about bg-light py-5">
            <div class="container ">
                <div class="row">
                    <div class="mb-5">
                        <h3 class="mb-4">The molecular structure</h3>
                        <div class="text-left">
                            <p class="mb-2">Integrity and strong business ethics are the foundation to the way we conduct our business.</p>
                            <p class="mb-2">In the constantly changing and multi-cultural environment of International business, in which, we operate, we strive to adopt and adapt to meet the requirements of our customers and society.</p>
                            <p class="mb-4">As a responsible corporate citizen, we ensure that we deliver in a healthy, safe and environment friendly manner.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
        @endsection
@section('script')
<!-- ============================================================== -->
@endsection