@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">Edit your Camera</div>
            <div class="panel-body">
                {!! Form::model([$camera,$camedata],['route' => ['cameras.update', $camera->id ],'files' => true, 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'カメラの機種') !!}
                        <p>{!! Form::text('name', old('name',$camera->name),["placeholder"=>"Canon, Nikon etc"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('image', '現在のカメラ画像') !!}
                            <img src="{{$camera->url}}" width="480" height="270">
                        {!! Form::label('image', '新しいカメラの画像を選ぶ') !!}
                        {!! Form::file('image') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('price', '料金設定') !!} 
                        <p>{!! Form::text('price', old('price',$camera->price), ["placeholder"=>"3000"], ['class' => 'form-control']) !!}円/泊</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', 'カメラのレンズ名') !!}
                        <p>{!! Form::text('lens', old('lens', $camedata->lens), ["placeholder"=>"EF-M 28mm F3.5 マクロ IS STM"], ['class' => 'form-control']) !!}</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('year', '使用年数') !!}
                        <p>{!! Form::text('year', old('year',$camedata->year), ["placeholder"=>"3"], ['class' => 'form-control']) !!}年</p>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('scene', '得意なシーン') !!}
                        <label>{!! Form::radio('scene','scenery', false,['class' => 'field']) !!}景色</label>
                        <label>{!! Form::radio('scene', 'person', false, ['class' => 'field']) !!}人物</label>
                        <label>{!! Form::radio('scene', 'selfy' , false,['class' => 'field']) !!}自撮り</label>
                        <label>{!! Form::radio('scene', 'beginner', false, ['class' => 'field']) !!}初心者におすすめ</label>
                    </div>

                    <div class="text-right">
                        {!! Form::submit('DON!', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
