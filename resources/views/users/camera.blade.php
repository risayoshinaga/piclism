@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<?php $camedata = $camera->datas ?>

<div class="row no-gutter">
　<div class="row row-eq-height">
    <div class="col-lg-12 col-md-6 col-sm-6 work"> 
               <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                <img src="{{asset('storage/cameras/'.$camera->explanation)}}" alt="">
    </a> 
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
            <img src="{{asset('storage/pictures/'.$picture->content)}}" width="400px" height="280px"></img>
          </a>        
        </li>
        @endforeach
      </ul>
</div>
    <div class="col-lg-4 col-md-6 col-sm-6 work"> 
        <p>{{ $camedata->lens}}</p>
        <p>{{ $camedata->year}}</p>
        <p>{{ $camedata->scene}}</p>
        <p>{!! link_to_route('calendars.show', 'レンタルする！', ['id' => $camera->id]) !!}</p>
    </div>
  </div>
</div>

@endsection


