@extends('layouts.app')

@section('content')

    <div class="page-header">
        <h1>Create borrow date</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
                
            <form action="{{ route('borrows.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="cameraId" value="{{ $cameraId }}">
                <div class="row">
                <div class="form-group col-xs-2">
                    <label for="start">START</label>
                   <input type="text" name="start" id="datepicker-start" autocomplete="off">
                </div>
                <div class="form-group col-xs-offset-1 col-xs-2">
                     <label for="end">END</label>
                     <input type="text" name="end" id="datepicker-end" autocomplete="off">
                </div>
                </div>
            <a class="btn btn-default" href="{{ route('borrows.show',['cameraId'=>$cameraId]) }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $('#datepicker-start').datepicker({ dateFormat: "yy-mm-dd" }).val();
    $('#datepicker-end').datepicker({ dateFormat: "yy-mm-dd" }).val();
    </script>


@endsection