@extends('layouts.app')

@extends('layouts.grid_app')

@section('content')

<div class="row no-gutter">
    <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876379/app/images/Slide2.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>人物撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
    <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876364/app/images/Slide1.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>景色の撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
      <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876381/app/images/Slide3.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>セルフィー撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876381/app/images/Slide4.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>お手頃な値段でレンタルできるカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
@endsection
