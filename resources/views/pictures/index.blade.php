@extends('layouts.app')

@section('content')


@foreach ($pictures as $picture)

<div id="picback">
    <div id="picnav">
        <img src="{{asset('storage/pictures/'.$picture->content)}}" alt="">
    </div>
</div>

@endforeach

<style>
#picnav, #nav {

    padding: 100px 0px;
    max-width: 100%;

   line-height: 0;

   -webkit-column-count: 3;
   -webkit-column-gap:   0px;
   -moz-column-count:    3;
   -moz-column-gap:      0px;
   column-count:         3;
   column-gap:           0px;
   
   
}

#picnav img, #nav img {
  width: 100%; 
  margin-left: 2%;
  margin-right: 2%;
  margin-bottom: 2%;
  height: 300px;
}
</style>
@endsection
 