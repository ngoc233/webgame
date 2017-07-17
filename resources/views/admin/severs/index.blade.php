@extends('admin.layouts.index')
@section('content')
<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					@include('admin.message.notifications')
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Severs</h2>
							<a href="{{route('sever.create')}}" class="btn btn-rounded btn-inline btn-success">Create</a>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Name</th>
							<th>Title</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach($severs  as $sever)
							<tr>
								<td>{{$sever->name}}</td>
								<td>{{$sever->title}}</td>
								<td>{{$sever->created_at}}</td>
								<td>{{$sever->updated_at}}</td>
								<td>
									{!! Form::open(
										[
											'route' =>['sever.destroy',$sever->id],
											'method'=>'DELETE',
											'name'	=>'frm'
										]
									) !!}
									<a  class="btn  btn-inline btn-primary" role="button" href="{{route('sever.edit',$sever->id)}}">Edit</a>
									<button style="float: left" type="submit" class="btn  btn-inline btn-danger" >Delete</button>
									{!! Form::close() !!}
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div>
@endsection