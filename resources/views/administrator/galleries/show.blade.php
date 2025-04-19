@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('administrator/save-gallery') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Gallery </h4>
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

				<div class="row">
					<div class="col-md-7" >
						<div class="mb-3 row">
							<label for="name" class="col-md-3 col-form-label">Name</label>
							<div class="col-md-9">
								<input name="name" class="form-control" type="text" value="{{$gallery->name}}" id="name" placeholder="Enter Gallery Name Here" >
							</div>
						</div>
						<div class="mb-3 row">
							<label for="name" class="col-md-3 col-form-label">Slug</label>
							<div class="col-md-9">
								<input name="slug" class="form-control" type="text" value="{{$gallery->slug}}" id="slug" placeholder="Enter Gallery Slug Here" >
							</div>
						</div>
						
					</div>

					<div class="col-md-5">	
						
					</div>



				</div>

				<h4 class="card-title"> Search Engine Options </h4>

				<div class="row">
					<div class="col-md-7" >
						<div class="mb-2 row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Meta Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" value="{{$gallery->title}}" id="title" placeholder="Enter Meta Title Here" >
							</div>
						</div>

						<div class="mb-2 row">

							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>

							<div class="col-sm-9">

								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{$gallery->meta_description}}</textarea>

							</div>

						</div>

						<div class="mb-2 row">

							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>

							<div class="col-sm-9">

								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{$gallery->schema}}</textarea>

							</div>

						</div>

						<div class="mb-2 row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" value="{{$gallery->utm_campaign}}" id="utm_campaign" placeholder="Enter Utm Campaign Here" >
							</div>
						</div>

						<div class="mb-2 row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" value="{{$gallery->utm_source}}" id="utm_source" placeholder="Enter Utm Source Here" >
							</div>
						</div>

						<div class="mb-2 row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Gallery Pincode Here" value="{{$gallery->robots}}" >
							</div>
						</div>
					</div>

					<div class="col-md-5" >

						

					</div>
				</div>
			</div>
			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="gallery_id" id="gallery_id" value="{{$gallery->id}}" >
				</div>
			</div>
		</form>
	</div>
</div>              
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection