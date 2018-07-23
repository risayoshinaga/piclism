@extends('layouts.app')

@section('content')

<div class="row row-center">
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5">
        <img src="http://res.cloudinary.com/dalfnbfxr/image/upload/v1532048771/app/images/yuko.jpg" class="img-responsive img-circle reviews">
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-7">
        <div class="popover right show"style="position:relative; top=-90px; left=100px; max-width:80%; display:inline;">
        <div class="arrow"></div>
            <h3 class="popover-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</h3>
        <div class="popover-content">
            <p>カメラ歴３年です。<br>よろしくお願いします！</p>
        </div>
        </div>
    </div>
</div>


<br>
<hr style="border:0;border-top:2px solid #dadada;">

<div class="photolist">
    <h1><span class="one">M</span>Y <span class="one">C</span>AMERAS</h1>
</div>

<div class="row">
    @foreach ($cameras as $camera)
    <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $camera->owner ?>
            <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="thumbnail">
            <img src="{{$camera->explanation}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>
                @if (Auth::user()->id !== $camera->user_id)
                    <p class="text-center"><a href="{{ route('calendars.show', ['id' => $camera->id])}}" class="btn btn-primary btn-sm" role="button"> レンタルする</a></p>
                @endif
                <p><h4><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> {{ $camera->price}}円/泊</h4></p>
                
                <p class="text-center">
                @if ( \Auth::id() === $camera->user_id )
                {!! Form::model($camera, ['route' => ['cameras.destroy', $camera->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-xs btn-default']) !!}
                {!! Form::close() !!}
                <a href="{{ route('cameras.edit', ['id' => $camera->id])}}" class="btn btn-default btn-xs" role="button"> 編集</a>
                @endif
                <style>
                    .btn-default{
                        color: dimgray;    
                    }
                </style>
                </p>
                
            </div>
            
        </div>
    </div>
    @endforeach
</div>

<br>
<hr style="border:0;border-top:2px solid #dadada;">

<div class="photolist">
    <h1><span class="one">M</span>Y <span class="one">P</span>HOTOGRAPHS</h1>
</div>

<div class="row">
    @foreach ($pictures as $picture)
    <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $picture->user ?>
            <?php $camera = $picture->camera ?>
            <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="thumbnail">
            <img src="{{$picture->content}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>
                <p><h4><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> {{ $camera->price}}円/泊</h4></p>
                @if ( \Auth::id() === $picture->user_id )
                {!! Form::model($picture, ['route' => ['pictures.destroy', $picture->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-xs btn-default']) !!}
                {!! Form::close() !!}
                <a href="{{ route('pictures.edit', ['id' => $picture->id])}}" class="btn btn-default btn-xs" role="button"> 編集</a>
                @endif
            </div>

        </div>
    </div>
    @endforeach
</div>
<style>
    .caption h4{
        text-align: center;
    }
</style>

@endsection
