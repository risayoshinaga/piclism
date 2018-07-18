@extends('layouts.app')

@section('content')
<p>{{ $user->name}}</p>
<p>{!! link_to_route('users.show', 'このユーザーの詳細', ['id' => $user->id]) !!}</p>
@foreach ($cameras as $camera)
       <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
        <img src="{{$camera->explanation}}"></img>
       </a>
@endforeach

@foreach ($pictures as $picture)
       <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="work-box">
        <img src="{{$picture->content}}"></img>
       </a>

@endforeach
@endsection