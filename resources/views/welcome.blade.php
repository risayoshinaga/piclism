@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            @include('index')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                 <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    @endif
@endsection

