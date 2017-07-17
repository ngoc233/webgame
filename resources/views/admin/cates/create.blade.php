@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Cate-Create</h3>
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
				<form action="{{route('cate.store')}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{ old('name') }}" type="text" class="form-control" id="inputPassword" name="name" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Menu</label>
						<div class="col-sm-10">
							<select class="form-control" name="menu_id"  value="{{ old('name') }}" >
								@foreach($menus as $menu)
									<option value="{{$menu->id}}">{{$menu->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-inline btn-primary">Create</button>
				</form>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection