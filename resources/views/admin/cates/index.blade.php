@extends('admin.layouts.index')
@section('content')
<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					@include('admin.message.notifications')
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Categories</h2>
							<a href="{{route('cate.create')}}" class="btn btn-rounded btn-inline btn-success">Create</a>
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
							<th>Alias</th>
							<th>Menu</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach($cates  as $cate)
							<tr>
								<td>{{$cate->name}}</td>
								<td>{{$cate->alias}}</td>
								<td>{{$cate->Menu->name}}</td>
								<td>{{$cate->created_at}}</td>
								<td>{{$cate->updated_at}}</td>
								<td>
									{!! Form::open(
										[
											'route' =>['cate.destroy',$cate->id],
											'method'=>'DELETE',
											'name'	=>'frm'
										]
									) !!}
									<a  class="btn  btn-inline btn-primary" role="button" href="{{route('cate.edit',$cate->id)}}">Edit</a>
									<button style="float: left" type="submit" class="btn  btn-inline btn-danger" >Delete</button>
									{!! Form::close() !!}
								</td>
							@endforeach
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div>
@endsection