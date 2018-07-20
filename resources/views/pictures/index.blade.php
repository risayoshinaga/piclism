@extends('layouts.app')

@section('content')

<div id="picback">

 <div class="photolist">
    <h1>Photographers' best</h1>
</div>
<div id="nav">
@foreach ($pictures as $picture)
<?php $user = $picture->user ?>
<p class="cameralist">
    <a href="{{ route('pictures.show', ['id' => $picture->id]) }}" class="work-box"> 
        <img src="{{$picture->content}}"  width="350" height="300">
    </a>
<span class="caption">{{ $user->name}}</span>
</p>
@endforeach
</div>
@endsection
