@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<?php $camedata = $camera->datas ?>

<div class="row no-gutter">
　<div class="row row-eq-height">
    <div class="col-lg-12 col-md-6 col-sm-6 work"> 
               <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                <img src="{{$camera->explanation}}" alt="">
    </a> 
</div>
@if ( \Auth::id() === $camera->user_id )
    {!! Form::model($camera, ['route' => ['cameras.destroy', $camera->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endif
  
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
    <div class="col-lg-4 col-md-6 col-sm-6 work"> 
        <p>{{ $camedata->lens}}</p>
        <p>{{ $camedata->year}}</p>
        <p>{{ $camedata->scene}}</p>
        <p>{!! link_to_route('calendars.show', 'レンタルする！', ['id' => $camera->id]) !!}</p>
    </div>
  </div>
</div>

@endsection


