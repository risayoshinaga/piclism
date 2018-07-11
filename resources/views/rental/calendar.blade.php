@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<p>{{ $user->name}}</p>
<p>{{ $camera->name}}</p>
<p>{{ $camera->explanation}}</p>


@endsection