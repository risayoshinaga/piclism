@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">New Lism</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'cameras.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'カメラの機種') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', 'カメラのレンズ名') !!}
                        {!! Form::text('lens', old('lens'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('year', '使用年数') !!}
                        {!! Form::text('year', old('year'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('scene', '得意なシーン') !!}
                        <label>{!! Form::radio('scene', old('scene'),['class' => 'form-control']) !!}景色</label>
                        <label>{!! Form::radio('scene', old('scene'),['class' => 'form-control']) !!}人物</label>
                        <label>{!! Form::radio('scene', old('scene'),['class' => 'form-control']) !!}自撮り</label>
                        <label>{!! Form::radio('scene', old('scene'), ['class' => 'form-control']) !!}初心者におすすめ</label>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('date', '貸し出せない日程') !!}
                        {!! Form::text('date', old('date'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('price', '料金設定') !!}
                        {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('content', '写真の説明') !!}
                        {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('speed', 'シャッタースピード') !!}
                        {!! Form::text('speed', old('speed'), ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('f_value', '絞り値') !!}
                        {!! Form::text('f_value', old('f_value'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('iso', 'ISO感度') !!}
                        {!! Form::text('iso', old('iso'), ['class' => 'form-control']) !!}
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