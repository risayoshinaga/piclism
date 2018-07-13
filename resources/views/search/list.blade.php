@extends('layouts.app')

@section('content')
@foreach ($cameras as $camera)
 {{ $camera->name}}
 <img src="{{asset('storage/cameras/'.$camera->explanation)}}"></img>
 @endforeach
@endsection