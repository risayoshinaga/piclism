@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<p>{{ $user->name}}</p>
<p>{{ $camera->name}}</p>
<p>{{ $camera->explanation}}</p>

<p>{!! link_to_route('calendars.show', 'レンタルする！', ['id' => $camera->id]) !!}</p>

@endsection


