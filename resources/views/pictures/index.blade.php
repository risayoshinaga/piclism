@extends('layouts.app')

@section('content')
@foreach ($pictures as $picture)
 <img src="{{asset('storage/pictures/'.$picture->content) }}" alt="{{ $picture->content }}"></img>
 @endforeach
@endsection