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
    <div class="container">
		<div class="row justify-content-center mt60 mt-5">
			<div class="col-md-6 text-center">
				<div class="form-success-content">
					<span class="success-icon"> <i class="fas fa-check"></i> </span>
					<h4> Thank You! Your Application Submitted Successfully</h4>
				</div>
			</div>
		</div>
	</div>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection