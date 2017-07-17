@extends('admin.layouts.index')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Menu-Edit</h3>
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
						'route' => ['menu.update',$menu->id],
						'method'=> 'PUT'
					]

				) !!}
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="inputPassword"  name="name" value="{{$menu->name}}"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Link</label>
						<div class="col-sm-10">
							<input type="text"  name="link" class="form-control" id="inputPassword" value="{{$menu->link}}">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Sort Order</label>
						<div class="col-sm-10">
							<input type="number"  name="sort_order" class="form-control" id="inputPassword" value="{{$menu->sort_order}}">
						</div>
					</div>
						<input type="reset" name="" value="Reset" class="btn btn-inline btn-secondary">
						<button type="submit" class="btn btn-inline btn-primary">Update</button>
				{!! Form::close() !!}
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection