@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Slider-Edit</h3>
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
						'route' => ['slider.update',$slider->id],
						'method'=> 'PUT',
						'files' => 'true'
					]

				) !!}
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input  value="{{$slider->name}}" type="text" class="form-control" id="inputPassword" name="name" placeholder="Name"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Image</label>
						<div class="col-sm-10">
							<div class="files-manager-header-left">
								<input type="file" class="form-control" name="image" >
							</div>
							<img width="100%" src="{{url('public/admin/image_sliders').'/'.$slider->image}}">
						</div>
					</div>
					<button type="submit" class="btn btn-inline btn-primary">Update</button>
				{!! form::close() !!}
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection