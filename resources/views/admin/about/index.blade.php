@extends('admin.layouts.index')
@section('content')
<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					@include('admin.message.notifications')
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>About</h2>
							<a href="{{route('about.create')}}" class="btn btn-rounded btn-inline btn-success">Create</a>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Content</th>
							<th>Logo</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								@if($about)
								<td>{{$about->content}}</td>
								<td class="table-icon-cell">
									<img width="200px" src="{{url('public/admin/logo_logo').'/'.$about->logo}}">
								</td>
								<td>{{$about->created_at}}</td>
								<td>{{$about->updated_at}}</td>
								<td>
									<a  class="btn  btn-inline btn-primary" role="button" href="{{route('about.edit',$about->id)}}">Edit</a>
								@endif
								</tr>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div>
@endsection