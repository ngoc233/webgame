@extends('admin.layouts.index')

@section('content')
<div class="page-content">
	<div class="container-fluid">
		<section class="box-typical  scrollable">
					<header class="box-typical-header">
						<div class="tbl-row">
							<div class="tbl-cell tbl-cell-title">
								<h3>Show Post</h3>
							</div>
						</div>
					</header>
					<div class="box-typical-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
									<tr>
										<th>ID</th>
										<td>{{$post->id}}</td>
									</tr>
									<tr>
										<th>Name</th>
										<td>{{$post->name}}</td>
									</tr>
									<tr>
										<th>Alias</th>
										<td>{{$post->alias}}</td>
									</tr>
									<tr>
										<th>Description</th>
										<td>{{$post->description}}</td>
									</tr>
									<tr>
										<th>Content</th>
										<td>
										<textarea id="demo" name="content" class="ckeditor">
											{{$post->content}}
										</textarea>
										</td>
									</tr>
									<tr>
										<th>Image</th>
										<td>
											<img width="100%" src="{{url('public/admin/image_post').'/'.$post->image}}">
										</td>
									</tr>
									<tr>
										<th>Title</th>
										<td>{{$post->title}}</td>
									</tr>
									<tr>
										<th>Cateogry</th>
										<td>{{$post->Cate->name}}</td>
									</tr>
									<tr>
										<th>Is_active</th>
										<td>
											@if($post->is_active == 0)
												{{'no'}}
											@else
												{{'active'}}
											@endif
										</td>
									</tr>
									<tr>
										<th>Created_at</th>
										<td>{{$post->created_at}}</td>
									</tr>
									<tr>
										<th>Updated_at</th>
										<td>{{$post->updated_at}}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!--.box-typical-body-->
		</section><!--.box-typical-->
	</div>
</div>
@endsection