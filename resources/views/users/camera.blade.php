@extends('layouts.app')

@section('content')
<?php $user = $camera->owner ?>
<?php $camedata = $camera->datas ?>

<div class="row no-gutter">
　<div class="row row-eq-height">
    <div class="col-lg-12 col-md-6 col-sm-6 work"> 
               <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                <img src="{{asset('storage/cameras/'.$camera->explanation)}}" alt="">
    </a> </div>

@foreach ($pictures as $picture)   
    <div class="col-lg-4 col-md-6 col-sm-6 work"> 
               <a href="{{ route('pictures.show', ['id' => $picture->id]) }}" class="work-box"> 
                <img src="{{asset('storage/pictures/'.$picture->content)}}" alt="">
    </a> </div> 
@endforeach
    <div class="col-lg-4 col-md-6 col-sm-6 work"> 
        <p>{{ $camedata->lens}}</p>
        <p>{{ $camedata->year}}</p>
        <p>{{ $camedata->scene}}</p>
        <p>{!! link_to_route('calendars.show', 'レンタルする！', ['id' => $camera->id]) !!}</p>
    </div>
  </div>
</div>

@endsection


