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
            
                </div>
            </div>
        </div>
        <!-- Products End -->

        <!-- Products End -->



       <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Under R&D</h4>
                    </div>
                    <h1 class="display-3 mb-4">Products In Pipeline - API</h1>
                
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


    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection