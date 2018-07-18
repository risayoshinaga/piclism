@extends('layouts.app')
@extends('layouts.grid_app')
@section('content')


<div class="row no-gutter">
　<div class="row row-eq-height">
    <div class="col-lg-4 col-md-4 col-sm-4 work"> 
    <div class="picture">
      <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876381/app/images/Slide5.png" alt="">
    </div>
        <div class="overlay">
          <div class="overlay-caption">
            <h5>一泊2000円以下のカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876381/app/images/Slide6.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>一泊2000円～5000円のカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
      <div class="col-lg-4 col-md-4 col-sm-4 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531876381/app/images/Slide7.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>一泊5000円以下のカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    　</div>
    </div>

@endsection
