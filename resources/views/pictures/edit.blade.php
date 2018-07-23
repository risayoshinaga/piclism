@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Picture's Information</div>
            <div class="panel-body">
                {!! Form::model([$picture,$picdata] , ['route' => ['pictures.update', $picture->id ],'files' => true, 'method' => 'put']) !!}
                    <div class="form-group">
                    
                    </div>
                        {!! Form::select('camera_id', $cameras) !!}
                    <div class="form-group">
                        {!! Form::label('image', '写真') !!}
                        {!! Form::file('image') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('speed', 'シャッタースピード') !!}
                        {!! Form::text('speed', old('speed', $picdata->speed), ['class' => 'form-control']) !!}
                    </div>
                   
                    <div class="form-group">
                        {!! Form::label('f_value', '絞り値') !!}
                        {!! Form::text('f_value', old('f_value', $picdata->f_value), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('iso', 'ISO感度') !!}
                        {!! Form::text('iso', old('iso', $picdata->iso), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('lens', '使用レンズ') !!} 
                        {!! Form::text('lens', old('lens', $picdata->lens), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="text-right">
                        {!! Form::submit('Yah!', ['class' => 'btn btn-success']) !!}
                        
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
