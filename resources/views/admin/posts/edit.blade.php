@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Post-Create</h3>
						</div>
					</div>
				</div>
			</header>
			@if(count($errors) > 0 )
                <div class="alert alert-danger">
                    @foreach($errors -> all() as $err)
                        {{$err}}<br>    
                    @endforeach
                </div>
            @endif
			<div class="box-typical box-typical-padding">
				{!! Form::open(
					[
						'route' => ['post.update',$post->id],
						'method'=> 'PUT',
						'files' => 'true'
					]

				) !!}
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{$post->name}}" type="text" class="form-control" id="inputPassword" name="name" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Category</label>
						<div class="col-sm-10">
							<select class="form-control" name="cate_id"  >
								@foreach($cates as $cate)
									<option
									@if($cate->id == $post->cate_id)
										{{"selected='selected'"}}
									@endif	
									 value="{{$cate->id}}">{{$cate->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Is_Active</label>
						<div class="col-sm-10">
							<div class="btn-group" data-toggle="buttons">
									<label class="btn">
										<input type="radio" name="is_active" id="option1" value="1" > Yes
									</label>
									<label class="btn active">
										<input type="radio" name="is_active" id="option2" value="0"   checked="checked"> No
									</label>
									
								</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Title</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{$post->title}}" type="text" class="form-control" id="inputPassword" name="title" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Description</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{$post->description}}" type="text" class="form-control" id="inputPassword" name="description" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Content</label>
						<div class="col-sm-10">
							<p class="form-control-static">
							<textarea id="demo" name="content" class="ckeditor">
								{{$post->content}}
							</textarea>
							</p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Image</label>
						<div class="col-sm-10">
							<div class="files-manager-header-left">
								<input type="file" class="form-control" name="image" >
							</div>
							<img width="100%" src="{{url('public/admin/image_post').'/'.$post->image}}">
						</div>
					</div>
					<button type="submit" class="btn btn-inline btn-primary">Update</button>
				{!! form::close() !!}
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection