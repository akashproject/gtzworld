@extends('layouts.main')

    @section('content')

        <!-- Header Start -->

    <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/img/inner-banners.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="inner-banner-breadcrumb">
						<span class="breadcrumbElement"> 
							<a href="https://www.gtzworld.com/"> Home </a> 
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

                            <h2 class="display-3 mb-4">The Chemistry of Excellence</h2>

                            <p class="mb-4">Our determination and commitment to the unrelenting pursuit of excellence is the key to our motivation.</p>

                            <p class="mb-4">GTZ (India) Pvt Ltd, once the Indian arm of US based trading house GETZ Bros & Co Inc started its operations indenting and trading chemicals in 1936. Committed to the philosophy of exceeding by excellence, the company collaborated with a Fortune 500 company, WITCO Corporation USA, a world leader in speciality chemicals in 1985 and ventured into the production of Metal Finishing Chemicals. Ever since GTZ has been engaged in production of world class finishing solutions.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- About End -->



        <!-- About Start -->

        <div class="container-fluid about bg-light py-5">

            <div class="container ">

                <div class="row g-5 align-items-center">

                    <div class="section-title text-center mb-5">

                        <h2 class="display-3 mb-4">Core Values</h2>

                        <h3 class="mb-4">The molecular structure</h3>

                        <p class="mb-2">Integrity and strong business ethics are the foundation to the way we conduct our business.</p>

                        <p class="mb-2">In the constantly changing and multi-cultural environment of International business, in which, we operate, we strive to adopt and adapt to meet the requirements of our customers and society.</p>

                        <p class="mb-4">As a responsible corporate citizen, we ensure that we deliver in a healthy, safe and environment friendly manner.</p>

                    </div>

                </div>

            </div>

        </div>

        <!-- About End -->

        <!-- About Start -->

        <div class="container-fluid about bg-light py-5">

            <div class="container ">

                <div class="row g-5 align-items-center">

                    <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.4s">

                        <div class=" text-start mb-5">

                            <h4 class="sub-title pe-3 mb-3">History of the organisation:</h4>

                            <p> GTZ (India) Pvt. Ltd, once the Indian arm of US based trading house GETZ Bros &amp; Co Inc started its operations indenting and trading chemicals in 1936. </p>

                            <p> In 1985 in order to continue its journey to becoming the leader in surface treatment chemicals, GTZ collaborated with WITCO Corporation USA and ventured into the production of Metal Finishing Chemicals. </p>

                            <p>Ever since this collaboration GTZ has led the way in India and many overseas markets for its Metal Finishing and Steel Mill Chemicals businesses.<p>

                            <p>After it’s success in Metal Finishing and Steel Mill Chemicals GTZ has entered into the space of polymer coatings, leather processing, and textile processing chemicals.</p>

                            <p>It is now looking to leverage it’s strength in research and development, and its’ background in organic chemistry to venture into the growing field of Active Pharmaceutical Ingredients and make a lasting impact.</p>

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

        <!-- About End -->

        <!-- Team Start -->

        <!-- Team End -->



         <!-- About Start -->

         <div class="container-fluid about bg-light py-5">

            <div class="container ">

                <div class="row g-5 align-items-center">

                    <div class="section-title text-center mb-5">

                        <h2 class="display-3 mb-4">Our Mission</h2>

                        <p class="mb-2">To be the market leader in surface treatment chemicals and active pharmaceutical</p>

                        <p class="mb-2">ingredients and to provide the best product services to our customers while fully participating in the community and fulfilling our duty towards society.</p>

                    </div>

                </div>

            </div>

        </div>

        <!-- About End -->

        <!-- About Start -->

        <div class="container-fluid about bg-light py-5">

            <div class="container ">

                <div class="row g-5 align-items-center">

                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">

                        <div class="section-title text-start mb-5">

                            <h2 class="display-3 mb-4">Global Presence</h2>

                            <h3 class="mb-4">The real catalyst</h3>

                            <p class="mb-2">We do what we do for society and our clients.</p>

                            <p class="mb-2">Their requirements are our motivation.</p>

                            <p class="mb-4">We are driven relentlessly to innovate, adopt and adapt to meet their trust reposed in us. This has led to a widespread clientele not only throughout India, but in many countries, Ethiopia, China, India, Kenya, South Africa, Germany, Indonesia, Togo, West Africa, Bangladesh, UAE, Nigeria, Tanzania, Korea, Egypt, Sri Lanka</p>

                        </div>

                    </div>

                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">

                        <div class="about-img pb-5 ps-5">

                            <img src="{{ url('/assets/frontend/img/location-map.jpg') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- About End -->


        
    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection