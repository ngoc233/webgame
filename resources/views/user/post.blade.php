@extends('user.layouts.index')
@section('content')
<div  style="padding-left: 20px; padding-right: 20px;">
	{!!$post->content!!}
</div>
@endsection