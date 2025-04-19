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

    <!-- Header End -->

    <section id="blog-item">

		<div class="container">

			<div class="blog-content-details">

				<div class="row">

					<div class="blog-list-view">

						@foreach(getJobs() as $value)

						<div class="list-career-item my-5">

							<div class="row">								

								<div class="col-md-9">

									<div class="blog-title-content headline">

										<h3><a href="#">{{$value->name}}</a></h3>

										<div class="blog-content">

										    <p><strong>Depertment : </strong>{!! $value->department !!}</p>	

                                            <p><strong>Division : </strong>{{ $value->division }}</p>
										</div>

										

										<ul class="career-tag" >

											<li class="career-tag-item" >

												<a href="javascript:void(0)" class="career-category" > {{ $value->experince }} </a>

											</li>
                                            @if($value->prefarence)
											<li class="career-tag-item" >

												<a href="javascript:void(0)" class="career-category" > {{ $value->prefarence }}</a>

											</li>
											@endif
										</ul>

									</div>

								</div>

								<div class="col-md-2 career-apply">

									<a href="https://form.jotform.com/243562791813462" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Apply Now</a>

								</div>

							</div>

						</div>

						@endforeach

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