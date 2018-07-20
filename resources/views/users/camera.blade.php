@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<?php $camedata = $camera->datas ?>

<div class="photo">
    <h1>Camera Profile </h1>
</div>

<div id="pic-data">
        <p class="data">撮影データ</p>
        <p>[使用レンズ]{{ $camedata->lens}}</p>
        <p>[使用年数]{{ $camedata->year}}</p>
        <p>[得意なシーン]{{ $camedata->scene}}</p>
</div>
<div id="take-came"> 

<div class="cap">{{ $camera->name}}</div>
    <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                <img src="{{$camera->explanation}}" width="400px", height="270px">
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
  </div>
</div>

<div class="text-right">
{!! link_to_route('calendars.show', 'レンタルする！', ['id' => $camera->id], ['class' => 'btn btn-lg btn-default']) !!}
</div>

@endsection

