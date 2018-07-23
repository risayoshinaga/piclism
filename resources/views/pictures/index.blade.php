@extends('layouts.app')

@section('content')



<div class="photolist">
    <h1><span class="one">A</span>LL <span class="one">P</span>HOTOGRAPHS</h1>
</div>

<div class="row">
    @foreach ($pictures as $picture)
    <div class="col-xs-6 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $picture->user ?>
            <?php $camera = $picture->camera ?>
            <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="thumbnail">
            <img src="{{$picture->content}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</h2>
                </a>
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h4><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h4>
                </a> 

            </div>
            
        </div>
    </div>
    @endforeach
</div>

@endsection
