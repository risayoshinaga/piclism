@extends('layouts.app')

@section('content')

@if (Auth::check())
<div class=power_word1>
        <h1># Let's share memories!!</h1>
</div>  

<div id="main_slide">
    <script type="text/javascript">
    $(function(){
      $('#main_slide').infiniteslide();
    });
    </script>
      <ul class=main_image>
        @foreach ($pictures as $picture)
        <li>
          <a href="{{ route('pictures.show', ['id' => $picture->id])}}" class="work-box">
            <img src="{{$picture->content}}" width="400px" height="280px"></img>
          </a>        
        </li>
        @endforeach
      </ul>
</div>
<div class=power_word2>
        <h1># Find the suitable camera for you.</h1>
</div>
   
<div class="menu">
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531886721/app/images/scene.jpg">
        </div>
        <div class="media-body">
            <a href="{{ route('sss')}}"><h2 class="media-heading">シーンから選ぶ</h2></a>
        </div>
    </div>
    <hr />
    <div class="media">
        <div class="media-body">
            <a href="{{ route('ppp')}}"><h2 class="media-heading">料金から選ぶ</h2></a>
        </div>
        <div class="media-right" href="#">
            <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531886743/app/images/money.jpg">
    </div>
    <hr />
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531886720/app/images/place.jpg">
        </div>
        <div class="media-body">
            <a href=#><h2 class="media-heading">ご近所から選ぶ</h2></a>
        </div>
    </div>
    <hr />
    <div class="media">
        <div class="media-body">
            <a href="{{ route('allpicture')}}"><h2 class="media-heading">撮った写真から選ぶ</h2></a>
        </div>
        <div class="media-right">
            <img class="media-object" src="images/photographer.jpg">
        </div>
    </div>
</div>   

@else
        
            <div class="text-center">
                <h1>Welcome to the PicMe</h1>
                {!! link_to_route('register', 'Sign up now!', null, ['class' => 'btn btn-lg btn-default']) !!}
            </div>
        
    <style>
        .jumbotron{
            background-color:white;
            background-image: url(https://res.cloudinary.com/dalfnbfxr/image/upload/v1531877822/app/images/welcome_back_ground.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size:cover ;
            border-color: white;
        }
        
    </style>
@endif

    
@endsection
