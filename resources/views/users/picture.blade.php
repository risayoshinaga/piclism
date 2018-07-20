@extends('layouts.app')

@section('content')

@extends('layouts.grid_app')
<?php $user = $picture->user ?>
<?php $camera = $picture->camera ?>
<?php $picdata = $picture->data ?>
<div class="photo">
    <h1>Photograph by {{$user->name}}</h1>
</div>
<div id="top-pic">
    <a href="{{ route('pictures.show', ['id' => $picture->id]) }}" class="work-box"> 
        <img src="{{$picture->content}}" width="830" height="450">
    </a>
</div>
@if ( \Auth::id() === $picture->user_id )
    {!! Form::model($picture, ['route' => ['pictures.destroy', $picture->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endif
<div id="pic-data">
        <p class="data">撮影データ</p>
        <p>[ シャッター速度 ]{{ $picdata->speed}}秒</p>
        <p>[ 絞り値 ]{{ $picdata->f_value}}</p>
        <p>[ ISO感度 ]{{ $picdata->iso}}</p>
</div>
<div id="take-came"> 
<div class="cap">{{ $camera->name}}</div>
    <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
        <img src="{{$camera->explanation}}" width="480" height="270">
    </a>
    
</div> 
<div class="text-right">

</div>
<a href="{{ route('rentals.create',['id'=>$camera->id])}}">rental</a>
@endsection
