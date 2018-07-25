@extends('layouts.app')

@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <div class="photolist">
    <h1><span class="one">C</span>HANGE <span class="one">D</span>ATE</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
                
            <form action="{{ route('borrows.update',['id' => $id]) }}" method="post">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="cameraId" value="{{$borrow['camera_id']}}">
                <div class="row">
                <div class="form-group col-md-8 col-md-offset-3 col-xs-6">
                    <label for="start">START</label>
                   <input type="text" name="start" id="datepicker-start" autocomplete="off" value="{{ $borrow['start'] }}">
    
                     <label for="end">END</label>
                     <input type="text" name="end" id="datepicker-end" autocomplete="off" value="{{ $borrow['end'] }}">
                </div>
                </div>
        </div>
        <div class="col-md-8 col-md-offset-4">
            <a class="btn btn-default" href="{{ route('borrows.show',['cameraId'=>$borrow['camera_id']]) }}">カレンダーを見る</a>
            <button class="btn btn-primary" type="submit" >変更する</button>
            </form>
            <form action="{{ route('borrows.destroy',['id' => $id]) }}" method="post">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
                <button class="btn btn-default btn-xs" type="submit" >予約を取り消す</button>
            </form>
        </div>
        </div>
    </div>
    <script type="text/javascript">
    $('#datepicker-start').datepicker({ dateFormat: "yy-mm-dd" }).val();
    $('#datepicker-end').datepicker({ dateFormat: "yy-mm-dd" }).val();
    </script>


@endsection

<style>
    .btn{
    font-family: "Noto Sans Japanese";
    color: dimgray;
}
</style>