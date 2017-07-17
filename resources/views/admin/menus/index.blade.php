@extends('admin.layouts.index')
@section('content')
<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					@include('admin.message.notifications')
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Top - Menu</h2>
							<a href="{{route('menu.create')}}" class="btn btn-rounded btn-inline btn-success">Create</a>
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
							<th>Link</th>
							<th>Sort_Order</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							@foreach($menus  as $menu)
							<tr>
								<td>{{$menu->name}}</td>
								<td>{{$menu->alias}}</td>
								<td>{{$menu->link}}</td>
								<td>{{$menu->sort_order}}</td>
								<td>{{$menu->created_at}}</td>
								<td>{{$menu->updated_at}}</td>
								<td>
									{!! Form::open(
										[
											'route' =>['menu.destroy',$menu->id],
											'method'=>'DELETE',
											'name'	=>'frm'
										]
									) !!}
									<a  class="btn  btn-inline btn-primary" role="button" href="{{route('menu.edit',$menu->id)}}">Edit</a>
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