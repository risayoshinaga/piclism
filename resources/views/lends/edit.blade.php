@extends('layouts.app')

@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <div class="page-header">
        <h1>Change borrow date</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
                
            <form action="{{ route('lends.update',['id' => $id]) }}" method="post">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="cameraId" value="{{$lend['camera_id']}}">
                <div class="row">
                <div class="form-group col-xs-2">
                    <label for="start">START</label>
                   <input type="text" name="start" id="datepicker-start" autocomplete="off" value="{{ $lend['start'] }}">
                </div>
                <div class="form-group col-xs-offset-1 col-xs-2">
                     <label for="end">END</label>
                     <input type="text" name="end" id="datepicker-end" autocomplete="off" value="{{ $lend['end'] }}">
                </div>
                </div>
            <a class="btn btn-default" href="{{ route('lends.show',['cameraId'=>$lend['camera_id']]) }}">Back</a>
            <button class="btn btn-primary" type="submit" >change</button>
            </form>
            <form action="{{ route('lends.destroy',['id' => $id]) }}" method="post">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
                <button class="btn btn-primary" type="submit" >delete</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $('#datepicker-start').datepicker({ dateFormat: "yy-mm-dd" }).val();
    $('#datepicker-end').datepicker({ dateFormat: "yy-mm-dd" }).val();
    </script>


@endsection