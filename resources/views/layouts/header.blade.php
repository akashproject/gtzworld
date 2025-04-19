<!-- Spinner Start -->

<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">

	<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">

		<span class="sr-only">Loading...</span>

	</div>

</div>

<!-- Spinner End -->





<!-- Topbar Start -->

<div class="container-fluid bg-dark px-5 d-none d-lg-block">
	<div class="row gx-0 align-items-center" style="height: 45px;">
		<div class="col-lg-8 text-center text-lg-start mb-lg-0">
			<div class="d-flex flex-wrap">
				<a href="tel:3322429901" class="text-light"><i class="fas fa-phone-alt text-primary me-2"></i>+91 {{ get_theme_setting('mobile') }}</a> 
				<span class="text-light  mx-2">| </span> <a href="tel:3322429901" class="text-light me-4">+91 33 2242 9901 </a>
				<a href="mailto:{{ get_theme_setting('email') }}" class="text-light"> <i class="fas fa-envelope text-primary me-2"></i>{{ get_theme_setting('email') }}</a>
			</div>
		</div>

		<div class="col-lg-4 text-center text-lg-end">
			<div class="d-flex align-items-center justify-content-end">
				<a href="https://www.facebook.com/gtzindiapvtltd" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
				<a href="https://x.com/GTZIndiaPvtLtd" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-x-twitter"></i></a>
				<a href="https://www.linkedin.com/company/gtz-pvt-ltd" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
	</div>

</div>

<!-- Topbar End -->



<div class="container-fluid position-relative p-0">

	<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">

		<a href="{{ url('/') }}" class="navbar-brand p-0">

			<img src="{{ url('/assets/frontend/img/logo.png')}}" class="img-fluid w-100" alt="Image">

		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

			<span class="fa fa-bars"></span>

		</button>

		<div class="collapse navbar-collapse" id="navbarCollapse">

			<div class="navbar-nav ms-auto py-0">

				<div class="nav-item dropdown">

					<a href="{{ url('/products')}}" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" onClick="window.location.href='/products'">Products</a>

					<div class="dropdown-menu m-0">

						@foreach($categories as $category)

							<a href="{{ url('/category/'.$category->slug) }}" class="dropdown-item">{{$category->name}}</a>

						@endforeach

					</div>

				</div>

				@foreach($headerMenu as $key => $menu)

					<a href="{{ url($key) }}" class="nav-item nav-link">{{ $menu }}</a>

				@endforeach

			</div>

			<a href="#lead-generate-popup" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 open-popup-link">Get Quote</a>

		</div>

	</nav>

</div>

