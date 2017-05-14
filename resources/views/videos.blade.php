@extends('layouts.nobgscroll')

@section('title', 'Videos')
<!--navigation-->
@section('nav')
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 opacity" align="center">     
@foreach ($courses as $course) 
    @if($selected_videos != NULL)
      @foreach ($selected_videos as $selected_video)  
          <h2 class=" inverse inverse-padd">{{$course->course_name}}: {{$selected_video->video_title}}</h2>
           <iframe width="100%" height="600" src="{{$selected_video->video_location}}" frameborder="0" allowfullscreen>
        </iframe>
     
</div>


<div class="col-sm-3 col-md-2 sidebar">
@foreach ($videos as $video)     
    
      
@if($selected_video->id == $video->id)
             <div class="inverse">
<a href="/videos/{{$course->id}}/{{$video->id}}" class="selected">
<h4>{{$video->video_title}}</h4>
</a>
          
            </div> <hr/>

@else
<div class="inverse">
<a href="/videos/{{$course->id}}/{{$video->id}}">
<h4>{{$video->video_title}}</h4>
</a>
          
            </div> <hr/>
@endif
            @endforeach
  @endforeach 
    @endif
@endforeach
</div>
@endsection