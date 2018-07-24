@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Picture's Information</div>
            <div class="panel-body">
                {!! Form::model([$picture,$picdata] , ['route' => ['pictures.update', $picture->id ],'files' => true, 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('camera_id', '撮影したカメラ') !!} <br>                       
                        <p>{!! Form::select('camera_id', $cameras) !!}</p>                    
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', '現在の写真') !!}
                            <img src="{{$picture->url}}" width="480" height="270">
                        {!! Form::label('image', '新しい写真を選ぶ') !!}
                        {!! Form::file('image') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('speed', 'シャッタースピード') !!}
                        <p>{!! Form::text('speed', old('speed',$picdata->speed), ["placeholder"=>"1 / 2000"],  ['class' => 'form-control']) !!}</p>
                    </div>
                   
                    <div class="form-group">
                        {!! Form::label('f_value', '絞り値') !!}
                        <p>{!! Form::text('f_value', old('f_value',$picdata->f_value), ["placeholder"=>"F5.6"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('iso', 'ISO感度') !!}
                        <p>{!! Form::text('iso', old('iso',$picdata->iso), ["placeholder"=>"200"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', '使用レンズ') !!} 
                        <p>{!! Form::text('lens', old('lens',$picdata->lens), ["placeholder"=>"ズーム、単焦点 etc"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="text-right">
                        {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
                        
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
