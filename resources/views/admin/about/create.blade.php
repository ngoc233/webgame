@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>About-Create</h3>
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
				<form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Content</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{ old('content') }}" type="text" class="form-control" id="inputPassword" name="content" placeholder="Name"></p>
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Logo</label>
						<div class="col-sm-10">
							<div class="files-manager-header-left">
								<input type="file" class="form-control" name="logo" >
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-inline btn-primary">Create</button>
				</form>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection