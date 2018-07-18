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
        <li><a href="https://www.rakuten.co.jp/"><img src="img/beach.jpg" alt="" width="400px" height="280px" /></a></li>
        <li><img src="img/camera.jpg" alt="" width="400px" height="280px" /></li>
        <li><img src="img/urban.jpg" alt="" width="400px" height="280px" /></li>
      </ul>
    </div>

<div class=power_word2>
        <h1># Find the suitable camera for you.</h1>
</div>
   
<div class="menu">
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="img/scene.jpg">
        </div>
        <div class="media-body">
            <a href=#><h2 class="media-heading">シーンから選ぶ</h2></a>
        </div>
    </div>
    <hr />
    <div class="media">
        <div class="media-body">
            <a href=#><h2 class="media-heading">料金から選ぶ</h2></a>
        </div>
        <div class="media-right" href="#">
            <img class="media-object" src="img/money.jpg">
    </div>
    <hr />
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="img/place.jpg">
        </div>
        <div class="media-body">
            <a href=#><h2 class="media-heading">ご近所から選ぶ</h2></a>
        </div>
    </div>
    <hr />
    <div class="media">
        <div class="media-body">
            <a href=#><h2 class="media-heading">Photographer から選ぶ</h2></a>
        </div>
        <div class="media-right">
            <img class="media-object" src="img/photographer.jpg">
        </div>
    </div>
</div>   

    @else
        <div class="text-center" background="img/huukei.jpg">
            <font color ="#ff5192" face = "Spirax, cursive"><h1>Welcome to PicMe</h1></font>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-info']) !!}
        </div>
    @endif

    
@endsection
