@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">New Camera</div>
            <div class="panel-body">
                {!! Form::model($camera_data,['route' => 'cameras.store','files' => true]) !!}
              
                    <div class="form-group">
                        {!! Form::label('name', 'カメラの機種') !!} <span class="glyphicon glyphicon-asterisk"></span><br>
                        <p>{!! Form::text('name', old('name'),["placeholder"=>"Canon, Nikon etc"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('image', 'カメラの画像') !!} <span class="glyphicon glyphicon-asterisk"></span>
                        {!! Form::file('image') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('price', '料金設定') !!} <span class="glyphicon glyphicon-asterisk"></span><br>
                        <p>{!! Form::text('price', old('price'), ["placeholder"=>"3000"], ['class' => 'form-control']) !!}円/泊</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', 'カメラのレンズ名') !!}<br>
                        <p>{!! Form::text('lens', old('lens'), ["placeholder"=>"EF-M 28mm F3.5 マクロ IS STM"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('year', '使用年数') !!}<br>
                        <p>{!! Form::text('year', old('year'), ["placeholder"=>"3"], ['class' => 'form-control']) !!}年</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('scene', '得意なシーンを選ぶ') !!}<br>
                        <label>{!! Form::radio('scene','scenery', false,['class' => 'field']) !!}景色</label>
                        <label>{!! Form::radio('scene', 'person', false, ['class' => 'field']) !!}人物</label>
                        <label>{!! Form::radio('scene', 'selfy' , false,['class' => 'field']) !!}自撮り</label>
                        <label>{!! Form::radio('scene', 'beginner', false, ['class' => 'field']) !!}初心者におすすめ</label>
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

<style>
::-webkit-input-placeholder {
        color: #dcdcdc;
        opacity: 1;
    }
</style>
@endsection
