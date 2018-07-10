@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">

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

