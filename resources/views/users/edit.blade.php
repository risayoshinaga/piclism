@extends('layouts.app')

@section('content')
<?php $image=$user->url ?>
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">Your Profile</div>
            <div class="panel-body">
                {!! Form::model($user,['route' => ['users.update', $user->id ],'files' => true, 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('selfintro', '一言コメント') !!}
                        {!! Form::text('selfintro', old('selfintro', $user->selfintro), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
@if (isset($image))  
                        {!! Form::label('image', '現在のプロフィール画像') !!}
                            <img src="{{$user->url}}" width="480" height="270">
@endif
                        {!! Form::label('image', '登録するプロフィール画像:') !!}
                        {!! Form::file('image') !!}
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
