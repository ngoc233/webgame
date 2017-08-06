@extends('user.layouts.index')
@section('content')
<div id="content">
    <ul id="list">
        @foreach($posts as $post)
        <li id="item">
            <div  class="row">
                <div class="col-md-4 hidden-xs col-lg-4 col-sm-4">
                    <span class="item-left">
                        <img width="165px" height="125px" src="{{url('public/admin/image_post/'.$post->image)}}">
                    </span>
                </div>
                <div class="col-md-8 col-xs-8 col-lg-8 col-md-8">
                    <button onclick="ajax_post({{$post->id}})">    
                    
                        <h4 id="title">
                        {{$post->title}}
                        </h4>
                    </button>
                    <p>{{$post->description}}</p>
                    <div class="col-md-8 col-xs-8 col-lg-8 col-md-8">
            </div>

        </li>
        @endforeach
    </ul>
</div>
    <!-- page-nav-->

    <!--/page-nav-->
@endsection