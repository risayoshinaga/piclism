@extends('layouts.app')

@section('content')
<p class="username">{{ $user->name}}</p>
<img class="icon" src="../images/yuko.jpg">
<div class="photolist">
    <h1>My Cameras</h1>
</div>
<div id="nav"> 
@foreach ($cameras as $camera)
<p class="cameras">
       <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
        <img src="{{$camera->explanation}}" width="350px", height="300px"></img>
       </a>
</p>
@endforeach
</div>

<div class="photolist">
    <h1>My Photographs</h1>
</div>
<div id="main_slide">
    <script type="text/javascript">
    $(function(){
      $('#main_slide').infiniteslide();
    });
    </script>
      <ul class=main_image>
        @foreach ($pictures as $picture)
        <li>
          <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="work-box">
            <img src="{{$picture->content}}" width="400px" height="280px"></img>
          </a>        
        </li>
        @endforeach
      </ul>
</div>

@endsection
