@extends('layouts.app')

@section('content')
<div id="nav">
@foreach ($cameras as $camera)
<figure id="cameralist">
       <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
        <img src="{{asset('storage/cameras/'.$camera->explanation)}}"></img>
       </a>
<figcaption>{{ $camera->name}}</figcaption>
</figure>
@endforeach
</div>
@endsection
