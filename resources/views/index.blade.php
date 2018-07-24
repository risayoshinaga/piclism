@extends('layouts.app')

@section('content')

@if (Auth::check())
    <div class=power_word1>
        <h1><span class="one">M</span>EMORY</h1>
    </div>
    <div class="explanation">
        <h3>　撮りたいイメージをクリックして、カメラをレンタルしましょう。</h3>
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
            <img src="{{$picture->url}}" width="400px" height="280px"></img>
          </a>        
        </li>
        @endforeach
      </ul>
</div>
    <div class=power_word2>
        <h1><span class="one">S</span>ELECT</h1>
    </div>
    <div class="explanation">
        <h3>　撮りたいシーン・料金・場所・写真から、あなたにぴったりのカメラを探しましょう。</h3>
    </div>
   
<div class="menu">
    <div class="row row-center">
        <div class="col-sm-6 col-md-5">
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1532409797/holiday.jpg">
                </div>    
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="media-body">
                <a href="{{ route('sss')}}"><h2 class="media-heading">シーンから選ぶ</h2></a>
            </div>    
        </div>
    </div>
    <hr/>
    <div class="row row-center">
        <div class="col-sm-6 col-md-6">
            <div class="media-body">
                <a href="{{ route('ppp')}}"><h2 class="media-heading">料金から選ぶ</h2></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-5">
            <div class="media-right" href="#">
                <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1531886743/app/images/money.jpg">
            </div>    
        </div>
    </div>
    <hr/>
    <div class="row row-center">
        <div class="col-sm-6 col-md-5">
            <div class="media">
                <div class="media-left">
                    <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1532409788/little-girl.jpg">
                </div>    
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
        <div class="media-body">
            <a href="{{ route('allpicture')}}"><h2 class="media-heading">撮った写真から選ぶ</h2></a>
        </div>    
        </div>
    </div>
    <hr/>
    <div class="row row-center">
        <div class="col-sm-6 col-md-6">
            <div class="media-body">
                <a href=#><h2 class="media-heading">ご近所から選ぶ</h2></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-5">
            <div class="media-right" href="#">
                <img class="media-object" src="https://res.cloudinary.com/dalfnbfxr/image/upload/v1532409854/table.jpg">
            </div>    
        </div>
    </div>
    
    
    
   

@else

<div class="welcome">
    <div class ="row">
        <div class="col-md-offset-2 col-md-8">
            <h1><span class="one">W</span>ELCOME <span class="one">T</span>O<br><span class="one">P</span>ICME</h1>
            <div class="explanation">
                <h2>ユーザー同士でカメラを貸し借りできるシェアアプリ。</h2>
            </div>
        </div>
    </div>
</div>






<div class="container">
    <div class="feature">
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
            <h2><span class="glyphicon glyphicon-camera color-#5bc9c5" style="font-size: 300%" aria-hidden="true" ></span></h2>
            <br>
            <p>気になるカメラを<br>手ごろな値段で試せる。</p>
          </div></div>
          <div class="col-md-4">
            <div class="thumbnail">
            <h2><span class="glyphicon glyphicon-yen color-#5bc9c5" style="font-size: 300%" aria-hidden="true" ></span></h2>
            <br>
            <p>カメラを貸して<br>お金を稼げる。</p>
          </div></div>
          <div class="col-md-4">
            <div class="thumbnail">
            <h2><span class="glyphicon glyphicon-phone color-#5bc9c5" style="font-size: 300%" aria-hidden="true" ></span></h2>
            <br>
            <p>カメラで撮った写真を<br>シェアできる。</p>
          </div></div>
        </div>
    </div>
    <div class="text-center">
    {!! link_to_route('register', 'SIGNUP', null, ['class' => 'btn btn-lg btn-default']) !!}
    </div>
</div>


<style>
.welcome h1 {
    color: dimgray;
    /*font-size: 500%;*/
    font-weight:bold;
    font-family: 'Hind Madurai', sans-serif;
    letter-spacing: 0.3em;
    text-align:center;
    line-height:2;
    margin:10% auto 0;
}
.welcome h1 .one{
    color :#5bc9c5;
}
.btn{
    border : solid #5bc9c5;
    background-color : #5bc9c5;
    color :white;
    letter-spacing: 0.3em;
    margin-top: 5%;
    
}
.btn:hover{
    border : solid #5bc9c5;
    background-color :rgba(0, 0, 0, 0);
    
}
.container .feature{
    margin-top:10%;
}
.container h2{
    text-align :center;
}
.color-#5bc9c5{
    color :#5bc9c5;
}
.container p{
    font-family: "Noto Sans Japanese";
    color: dimgray;
    font-weight: 200;
    font-size: 200%;
    text-align:center;
    
}
.thumbnail{
    border: solid #5bc9c5;
    border-radius:10%;
    border-width:thin;
}
.explanation h2{
    font-weight:200;
    color :gray;
}


</style>        
    
@endif

    
@endsection

