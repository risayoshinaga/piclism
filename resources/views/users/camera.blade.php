@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<?php $camedata = $camera->datas ?>

<div class="photolist">
    <h1><span class="one">C</span>AMERA'S <span class="one">P</span>ROFILE</h1>
</div>

<div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="{{$camera->explanation}}" class="thumbnail">
            <div class= "caption">
       {{--       @if (Auth::user()->id !== $camera->user_id)
              <p class="text-center"><a href="{{ route('calendars.show', ['id' => $camera->id])}}" class="btn btn-primary btn-sm" role="button"> レンタルする</a></p>
              @endif
       --}}
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <ul class ="list-group">
            <li class ="list-group-item"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</li>
            <li class ="list-group-item"><a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</a></li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> {{ $camera->price}}円/泊</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 付属レンズ：{{ $camera->lens}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 使用年数：{{ $camera->year}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 得意なシーン：{{ $camera->scene}}</li>
          </ul>
        </div>
</div>

@endsection
