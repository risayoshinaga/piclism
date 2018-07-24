@extends('layouts.app')

@section('content')

<?php $picture = $camera ->picture ?>

<div class="photolist">
    <h1><span class="one">C</span>AMERA'S <span class="one">P</span>ROFILE</h1>
</div>

<div class ="row row-center">
    <div class ="col-sm-offset-2 col-sm-8">
    <?php $user = $camera->owner ?>
    <?php $camedata = $camera->datas ?>
          <div class="thumbnail">
            <img src="{{$camera->url}}" class="thumbnail">
            <div class= "caption">
          {{--    @if (Auth::user()->id !== $camera->user_id)
              <p class="text-center"><a href="{{ route('calendars.show', ['id' => $camera->id])}}" class="btn btn-primary btn-sm" role="button"> レンタルする</a></p>
              @endif --}}
              
            </div>
            @if ( \Auth::id() === $camera->user_id )
            <div class="text-center">
                <a href="{{ route('cameras.edit', ['id' => $camera->id])}}" class="btn btn-primary btn-md" role="button"> 編集する</a>
                {!! Form::model($camera, ['route' => ['cameras.destroy', $camera->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-xs btn-default']) !!}
                {!! Form::close() !!}
                {!! link_to_route('lends.show', 'lend', ['lend' => $camera->id]) !!}
            @else
                {!! link_to_route('rentals.show', 'borrow', ['rental' => $camera->id]) !!}
            @endif
            </div>
                <style>
                    .btn-primary{
                        color: white;
                        background-color:#AD95DB;
                        border: solid #AD95DB;
                    }
                    .btn-primary:hover{
                        color: dimgray;
                        background-color:white;
                        border: solid #AD95DB;
                    }
                    
                </style>
          </div>
        </div>
</div>
<div class="row">        
        <div class="col-xs-12 col-md-offset-3 col-md-6">
          <ul class ="list-group">
            <li class ="list-group-item"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</li>
            <li class ="list-group-item"><a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</a></li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> {{ $camera->price}}円/泊</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 付属レンズ：{{ $camedata->lens}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 使用年数：{{ $camedata->year}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 得意なシーン：{{ $camedata->scene}}</li>
          </ul>
        </div>
        
</div>

<br>
<br>
<div class="explanation">
        <h3>　{{ $camera->name}}で撮った写真一覧</h3>
</div>
<style>
    .explanation{
        margin-left:5%;
    }
</style>
<br>

<div class="row row-center">
    @foreach ($pictures as $picture)
    <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $picture->user ?>
            <?php $camera = $picture->camera ?>
            <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="thumbnail">
            <img src="{{$picture->url}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</h2>
                </a>

            </div>
            
        </div>
    </div>
    @endforeach
</div>

@endsection

