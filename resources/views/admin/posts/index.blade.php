@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
				<header class="section-header">
					<div class="tbl">
						@include('admin.message.notifications')
						<div class="tbl-row">
							<div class="tbl-cell">
								<h2>Posts</h2>
								<a href="{{route('post.create')}}" class="btn btn-rounded btn-inline btn-success">Create</a>
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
							<th>Description</th>
							<th>Title</th>
							<th>Image</th>
							<th>Active</th>
							<th>Created_at</th>
							<th>Updated_at</th>
							<th>Action</th>
						</tr>
						</thead>
					<tbody>
					@foreach($posts as $post)
					<tr>
						<td>{{$post->name}}</td>
						<td>{{$post->description}}</td>
						<td class="color-blue-grey-lighter">{{$post->title}}</td>
						<td class="table-icon-cell">
							<img width="100px" src="{{url('public/admin/image_post').'/'.$post->image}}">
						</td>
						<td>
							@if($post->is_active == 1)
								{{'active'}}
							@else
								{{'no'}}
							@endif
						</td>
						<td>{{$post->created_at}}</td>
						<td>{{$post->updated_at}}</td>
						<td>
									{!! Form::open(
										[
											'route' =>['post.destroy',$post->id],
											'method'=>'DELETE',
											'name'	=>'frm'
										]
									) !!}
									<a  class="btn  btn-inline btn-secondary" role="button" href="{{route('post.show',$post->id)}}">Show</a>
									<a  class="btn  btn-inline btn-primary" role="button" href="{{route('post.edit',$post->id)}}">Edit</a>
									<button style="float: left" type="submit" class="btn  btn-inline btn-danger" >Delete</button>
									{!! Form::close() !!}
								</td>
					</tr>
					@endforeach
				</tbody>
				</table>
			</div>
		</section>

		</div><!--.container-fluid-->
	</div>
@endsection