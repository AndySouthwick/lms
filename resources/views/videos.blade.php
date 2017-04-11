@extends('layouts.app')

@section('title', 'Videos')
<!--navigation-->
@section('nav')
@endsection
@section('content')
@foreach ($videos as $video)     
      <div class="col-lg-12">
       <div class="panel panel-default">
       <div class="panel-body">
             <div class="col-lg-12">
<a data-toggle="modal" data-target="#{{$video->id}}">
<h4>{{$video->video_title}}</h4>
</a>
            </div>
            </div></div></a></div>
            <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$video->video_title}}</h4>
      </div>
      <div class="modal-body">
      <iframe width="560" height="315" src="{{$video->video_location}}" frameborder="0" allowfullscreen></iframe>
       
      </div>   
    </div>
  </div>
</div>
@endforeach
@endsection