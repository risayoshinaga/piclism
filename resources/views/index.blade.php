@extends('layouts.app')

@section('content')
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dsign - Minimal portfolio Bootstrap template</title>
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<div class="row no-gutter">
    <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide2.PNG" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>人物撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
    <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide1.PNG" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>景色の撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
      <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide3.PNG" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>セルフィー撮影に適したカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-6 col-md-6 col-sm-6 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide4.PNG" alt="">
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
