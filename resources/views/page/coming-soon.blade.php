@extends('layouts.main')

    @section('content')

    <!-- Header Start -->

    <!-- Header Start -->

    <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url({{ url('assets/frontend/img/inner-banners.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="inner-banner-breadcrumb">
						<span class="breadcrumbElement"> 
							<a href="https://www.icajobguarantee.com"> Home </a> 
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

    <!-- Header End -->

    <section id="blog-item">

		<div class="container">

			<div class="blog-content-details">

				<div class="row">

                    <div class="text-center py-5 my-5">

                        <h1 style="text-align: center;">

                            The page is Under Development <br />

                            <span style="font-size: 36pt;">Coming Soon</span>

                        </h1>

                    </div>

                </div>

            </div>

        </div>

    </section>

    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection