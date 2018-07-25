@extends('layouts.app')

@section('content')
<div class="container">
    <div class="photolist">
    <h1><span class="one">M</span>AKE <span class="one">R</span>ESERVATION</h1>
    </div>
    <div class="col-md-offset-2 col-md-8">
        <h3><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>カレンダーの貸し出し可能期間内で、レンタルしたい日にちを選択してください。</h3>
    </div>
        @include('borrows.create',['id'=>$id])
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-body color-dimgray">
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .col-md-8 h3{
        font-family: "Noto Sans Japanese";
        font-weight:200;
        color:dimgray;
    }
    .color-dimgray{
        color:dimgray;
    }
</style>