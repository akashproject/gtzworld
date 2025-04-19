@extends('layouts.main')

    @section('content')

    <!-- Header Start -->
<style>
    .gallery-category ul {
    margin: 0;
    padding: 0;
}
.gallery-category ul li.cat-item {
    list-style: none;
}

.gallery-category ul li.cat-item a {
    font-size: 20px;
    padding: 10px;
    background: #1e7fc2;
    border-radius: 5px;
    color: #fff;
    width:100%;
    display:block;
}

.gallery-img-content img {
    height: 210px;
    width: 100%;
}
</style>
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

    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="sub-style">
                    <h1 class="sub-title px-3 mb-0">Gallery</h1>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="side-bar-widget">
                            <h2 class="widget-title text-capitalize" style="font-size: 24px;">Gallery <span>Categories</span></h2>
                            <div class="gallery-category ul-li-block">
                                <ul>
                                    @foreach(getGalleryName() as $key => $galleryName)
                                    <li class="cat-item my-2">
                                        <a href="?slug={{ $galleryName->slug }}">{{ $galleryName->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="gallery" class="row g-4 justify-content-center">
                        @foreach(getGalleries() as $value)
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="gallery-img-content" >
                                <a href="{{url('/public/gallery/'.$value)}}" class="gallery-img example-image-link" data-lightbox="example-set" >
                                   <img src="{{url('/public/gallery/'.$value)}}" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        @endforeach
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