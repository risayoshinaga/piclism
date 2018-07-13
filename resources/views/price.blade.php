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
　<div class="row row-eq-height">
    <div class="col-lg-4 col-md-4 col-sm-4 work"> 
    <div class="picture">
      <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide5.PNG" alt="">
    </div>
        <div class="overlay">
          <div class="overlay-caption">
            <h5>一泊2000円以下のカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide6.png" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>一泊2000円～5000円のカメラへ</h5>
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay --> 
    </a> </div>
      <div class="col-lg-4 col-md-4 col-sm-4 work"> <a href="{{ route('cameras.index') }}" class="work-box"> <img src="images/Slide7.png" alt="">
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
