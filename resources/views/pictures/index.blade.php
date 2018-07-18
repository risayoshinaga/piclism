@extends('layouts.app')

@section('content')
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
 