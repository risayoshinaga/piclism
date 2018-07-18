@extends('layouts.app')

@section('content')

@extends('layouts.grid_app')
<?php $user = $picture->user ?>
<?php $camera = $picture->camera ?>
<?php $picdata = $picture->data ?>

<div class="row no-gutter">
　<div class="row row-eq-height">
    <div class="col-lg-12 col-md-6 col-sm-6 work"> <a href="{{ route('pictures.show', ['id' => $picture->id]) }}" class="work-box"> 
                <img src="{{asset('storage/pictures/'.$picture->content)}}" alt="">
    </a> </div>
    <div class="col-lg-4 col-md-6 col-sm-6 work"> 
        <p>{{ $picdata->speed}}</p>
        <p>{{ $picdata->f_value}}</p>
        <p>{{ $picdata->iso}}</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 work"> 
               <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                <img src="{{asset('storage/cameras/'.$camera->explanation)}}" alt="">
    </a> </div> 
  </div>
</div>
@endsection

