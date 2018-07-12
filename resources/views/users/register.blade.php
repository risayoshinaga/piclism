@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">New Lism</div>
            <div class="panel-body">
                {!! Form::model($camera_data,['route' => 'cameras.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'カメラの機種') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
		    <div class="form-group">
                        {!! Form::label('explanation', 'explanation') !!}
                        {!! Form::text('explanation', old('explanation'), ['class' => 'form-control']) !!}
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
                        <label>{!! Form::radio('scene','scenery', false,['class' => 'form-control']) !!}景色</label>
                        <label>{!! Form::radio('scene', 'person', false, ['class' => 'form-control']) !!}人物</label>
                        <label>{!! Form::radio('scene', 'selfy' , false,['class' => 'form-control']) !!}自撮り</label>
                        <label>{!! Form::radio('scene', 'beginner', false, ['class' => 'form-control']) !!}初心者におすすめ</label>
                    </div>
                    
                    
                    <div class="form-group">
                        {!! Form::label('price', '料金設定') !!} 
                        {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
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