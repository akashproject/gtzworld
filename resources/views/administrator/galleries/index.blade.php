@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($galleries)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> All Pages</h5>
				<div class="table-responsive">
					<table id="" class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Created At</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($galleries as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>									
								<td>{{ $value->created_at->format("d M, Y") }}</td>									
								<td>
									<div class="d-inline-block text-nowrap">
										@can('update')
										<a href="{{ route('admin-view-gallery',$value->id) }}" class="btn btn-sm btn-icon">
											<i class="bx bx-edit"></i>
										</a>
										@endcan
										@can('delete')
										<a href="{{ route('admin-delete-gallery',$value->id) }}" onclick="return confirm('Are you sure?')"; class="btn btn-sm btn-icon delete-record">
											<i class="bx bx-trash"></i>
										</a>
										@endcan
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	@endif
</div>
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection



