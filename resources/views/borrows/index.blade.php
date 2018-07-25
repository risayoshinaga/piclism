@extends('layouts.app')

@section('content')

<div class="photolist">
    <h1><span class="one">Y</span>OUR <span class="one">R</span>ESERVATION</h1>
</div>

<div class="row">
    @foreach ($borrows as $borrow)
<?php $id = $borrow -> camera_id ;
    $camera = \App\Camera::find($id) ; ?>

    
     <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $camera->owner ?>
            <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="thumbnail">
            <img src="{{$camera->url}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>

                <a><h4><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>{{$borrow->start}}~{{$borrow->end}}</h4></a>
                    <a href="{{ route('borrows.edit', ['id' => $borrow->id])}}" class="work-box"><h4>→予約変更ページへ</h4></a>
            </div>
            
        </div>
    </div>
    @endforeach
</div>

@endsection
