@extends('layouts.app')

@section('content')

<div class="row row-center">
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <img src="{{$user->url}}" class="img-responsive img-circle reviews">
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
        <div class="popover right show"style="position:relative; top=-90px; left=100px; max-width:80%; display:inline;">
        <div class="arrow"></div>
            <h3 class="popover-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $user->name }}</h3>
        <div class="popover-content">
            <p>{{$user->selfintro}}</p>
        </div>
        </div>
    </div>
    
</div>
@if (Auth::user()->id === $user->id)
<div class="circle">
    <a href="{{ route('intro') }}" class="bt-samp31">プロフィール編集</a>
    <a href="{{ route('borrows.index') }}" class="bt-samp31">予約した日を確認</a>
</div>
<style>
a.bt-samp31{
  display: block;
  margin-top: 5px;
  text-decoration: none;
  height:35px;
  width: 180px;
  line-height: 37px;
  text-align: center;
  color: #2bb6c1;
  border:solid 1px #2bb6c1;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  -ms-transition: 0.3s;
  transition: 0.3s;
}
a.bt-samp31:hover{
  background: #2bb6c1;
  color: #fff;
}
</style>            
@endif
<br>

<hr style="border:0;border-top:2px solid #dadada;">

<div class="photolist">
    <h1><span class="one">M</span>Y <span class="one">C</span>AMERAS</h1>
</div>

<div class="row">
    @foreach ($cameras as $camera)
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
                <p><h4><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span> {{ $camera->price}}円/泊</h4></p>
            </div>
        </div>
@if (Auth::user()->id == $camera->user_id)                
                <a href="{{ route('lends.show', ['id' => $camera->id])}}" class="work-box"><h4>→貸し出し期間と予約を確認</h4></a>
@endif
    </div>
    @endforeach
</div>

<br>
<hr style="border:0;border-top:2px solid #dadada;">

<div class="photolist">
    <h1><span class="one">M</span>Y <span class="one">P</span>HOTOGRAPHS</h1>
</div>

<div class="row">
    @foreach ($pictures as $picture)
     <div class="col-xs-12 col-md-4">
        <div class="thumbnail">
            
            <?php $user = $picture->user ?>
            <?php $camera = $picture->camera ?>
            <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="thumbnail">
            <img src="{{$picture->url}}"></img>
            </a>
            <div class="caption">
                <a href="{{ route('cameras.show', ['id' => $camera->id])}}" class="work-box">
                    <h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> {{ $camera->name}}</h2>
                </a>

            </div>

        </div>
    </div>
    @endforeach
</div>
<style>
    .caption h4{
        text-align: center;
    }
</style>

@endsection
