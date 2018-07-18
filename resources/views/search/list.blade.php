@extends('layouts.app')

@section('content')
<div id="nav">
@foreach ($cameras as $camera)
<p class="cameralist">
 <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
   <img src="{{$camera->explanation}}" width="350" height="300"></img>
</a>
   <span class="caption">{{ $camera->name}}</span>
</p>
@endforeach
</div>
@endsection
