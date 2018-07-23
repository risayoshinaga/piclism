@extends('layouts.app')

@section('content')
<div class="photolist">
    <h1><span class="one">C</span>AMERAS</h1>
</div>

<div class="row">
    @foreach ($cameras as $camera)
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail">
            
            <?php $user = $camera->owner ?>
            <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="thumbnail">
            <img src="{{$camera->explanation}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>
     {{--           @if (Auth::user()->id !== $camera->user_id)
                    <p class="text-center"><a href="{{ route('calendars.show', ['id' => $camera->id])}}" class="btn btn-primary btn-sm" role="button"> レンタルする</a></p>
                @endif
        --}}
                <p><a href="{{ route('users.show', ['id' => $user->id])}}" class="work-box">
                    <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name}}</h4>
                </a> 
                    <h4><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> {{ $camera->price}}円/泊</h4></p>
            </div>
            
        </div>
    </div>
    @endforeach
</div>


@endsection
