@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            @include('index')
            </div>
        </div>
@else
        
            <div class="text-center">
                <h1>Welcome to the PicMe</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-default']) !!}
            </div>
        
    <style>
        .jumbotron{
            background-color:white;
            background-image: url(https://res.cloudinary.com/dalfnbfxr/image/upload/v1531877822/app/images/welcome_back_ground.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size:cover ;
            border-color: white;
        }
        
    </style>
    @endif

@endsection

