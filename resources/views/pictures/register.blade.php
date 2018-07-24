@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">New Picture</div>
            <div class="panel-body">
                {!! Form::model($picture , ['route' => 'pictures.store','files' => true]) !!}
                    <div class="form-group">
                         {!! Form::label('camera_id', '撮影したカメラ') !!} <span class="glyphicon glyphicon-asterisk"></span>
                         <p>{!! Form::select('camera_id', $cameras) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('image', '撮影した写真') !!} <span class="glyphicon glyphicon-asterisk"></span>
                        {!! Form::file('image') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('speed', 'シャッタースピード') !!}<br>
                        <p>{!! Form::text('speed', old('speed'), ["placeholder"=>"1 / 2000"],  ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('f_value', '絞り値') !!}<br>
                        <p>{!! Form::text('f_value', old('f_value'), ["placeholder"=>"F5.6"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('iso', 'ISO感度') !!}<br>
                        <p>{!! Form::text('iso', old('iso'), ["placeholder"=>"200"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', '使用レンズ') !!} <br>
                        <p>{!! Form::text('lens', old('lens'), ["placeholder"=>"ズーム、単焦点 etc"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="text-left">
                      <span class="glyphicon glyphicon-asterisk"></span> は必須項目です
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
