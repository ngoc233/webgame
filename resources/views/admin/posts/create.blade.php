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
				<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{ old('name') }}" type="text" class="form-control" id="inputPassword" name="name" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Category</label>
						<div class="col-sm-10">
							<select class="form-control" name="cate_id"  value="{{ old('name') }}" >
								@foreach($cates as $cate)
									<option value="{{$cate->id}}">{{$cate->name}}</option>
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
							<p class="form-control-static"><input  value="{{ old('title') }}" type="text" class="form-control" id="inputPassword" name="title" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Description</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{ old('description') }}" type="text" class="form-control" id="inputPassword" name="description" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Content</label>
						<div class="col-sm-10">
							<p class="form-control-static">
							<textarea id="demo" value="{{ old('content') }}" name="content" class="ckeditor">
								
							</textarea>
							</p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Image</label>
						<div class="col-sm-10">
							<div class="files-manager-header-left">
								<input id="f" type="file" class="form-control" name="image" onchange="file_change(this)" style="display: none" />
								<input type="button" value="Chọn ảnh" onclick="document.getElementById('f').click()" />
								<img id="img" width="841px" height="450px;" style="display: none" />
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-inline btn-primary">Create</button>
				</form>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection