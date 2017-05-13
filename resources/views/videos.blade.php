@extends('layouts.nobgscroll')

@section('title', 'Videos')
<!--navigation-->
@section('nav')
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 opacity" align="center">     
@foreach ($courses as $course) 
  <h2 class=" inverse inverse-padd">{{$course->course_name}}</h2>

    @if($selected_videos != NULL)
  @foreach ($selected_videos as $selected_video)  

        <iframe width="100%" height="600" src="{{$selected_video->video_location}}" frameborder="0" allowfullscreen>
     
        </iframe>


         @endforeach 
    @endif
</div>
@endforeach

<div class="col-sm-3 col-md-2 sidebar">
@foreach ($videos as $video)     
    
      

             <div class="inverse">
<a href="/videos/{{$course->id}}/{{$video->id}}">
<h4>{{$video->video_title}}</h4>
</a>
          
            </div> </hr>
            <!-- Button trigger modal -->

<!-- Modal -->
<!-- <div class="modal fade" id="{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</div>-->
@endforeach
</div>
@endsection