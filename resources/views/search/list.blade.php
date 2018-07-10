@extends('layouts.app')

@section('content')

@if (count($cameras) > 0)
<ul class="media-list">
@foreach ($cameras as $camera)
    <li class="media">
{{--        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($camera->name, 50) }}" alt="">
        </div>
--}}
        <div class="media-body">
            <div>
                {{ $camera->name }}
            </div>
            <div>
                <p>{!! link_to_route('cameras.show', '詳細をみる', ['id' => $camera->id]) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $cameras->render() !!}
@endif

@endsection