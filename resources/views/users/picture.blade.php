@extends('layouts.app')

@section('content')

@extends('layouts.grid_app')
<?php $user = $picture->user ?>
<?php $camera = $picture->camera ?>
<?php $picdata = $picture->data ?>

<div id="top-pic">
    <a href="{{ route('pictures.show', ['id' => $picture->id]) }}" class="work-box"> 
        <img src="{{asset('storage/pictures/'.$picture->content)}}" width="800" height="450">
    </a>
</div>
<div id="pic-data">
        <p>[シャッター速度]{{ $picdata->speed}}秒</p>
        <p>[絞り値]{{ $picdata->f_value}}</p>
        <p>[ISO感度]{{ $picdata->iso}}</p>
</div>
<div id="take-came"> 
    <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
        <img src="{{asset('storage/cameras/'.$camera->explanation)}}" width="480" height="270">
    </a>
</div> 

@endsection

