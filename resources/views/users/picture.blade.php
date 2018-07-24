@extends('layouts.app')

@section('content')

@extends('layouts.grid_app')
<?php $user = $picture->user ?>
<?php $camera = $picture->camera ?>
<?php $picdata = $picture->data ?>
<div class="photolist">
    <h1><span class="one">P</span>HOTOGRAPH'S <span class="one">P</span>ROFILE</h1>
</div>

<div class ="row row-center">
    <div class ="col-sm-offset-2 col-sm-8">
        <div class="thumbnail">
            <img src="{{$picture->content}}" class="thumbnail">
        </div>
    </div>
</div>

<br>
<br>
<hr style="border:0;border-top:2px solid #dadada;">
<br>
<br>

<div class="row ">
    <div class="col-sm-offset-2 col-sm-2">
        <div class ="userimfo">
            <div class="thumbnail">
                <img src="{{$user->url}}" class="img-responsive img-circle reviews">
                <div class="caption">
                    <a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box">
                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class =" col-sm-6">
        <ul class ="list-group">
            <li class ="list-group-item">撮影データ</li>
            <li class ="list-group-item"><a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</a></li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 付属レンズ：{{ $picdata->lens}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> シャッター速度：{{ $picdata->speed}}秒</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 絞り値：{{ $picdata->f_value}}</li>
            <li class ="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> ISO感度：{{ $picdata->iso}}</li>
          </ul>    
    </div>    
</div>

<br>
<br>
<hr style="border:0;border-top:2px solid #dadada;">
<br>

<div class ="row row-center">
    <div class="col-sm-offset-4 col-sm-4">
        <div class="thumbnail">
            <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="thumbnail">
            <img src="{{$camera->explanation}}" class="thumbnail">
            </a>
            <div class= "caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>
        {{--   
                @if (Auth::user()->id !== $camera->user_id)
                <p class="text-center"><a href="{{ route('calendars.show', ['id' => $camera->id])}}" class="btn btn-primary btn-sm" role="button"> レンタルする</a></p>
                @endif
        --}}
                <h4><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> {{ $camera->price}}円/泊</h4>
            </div>
        </div>
    </div>
</div>

    

@endsection
