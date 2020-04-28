@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
        <h2 align="center">{{$about->title}}</h2>
        <hr>
        <p>{{$about->description}}</p>
            <hr>
            <a class="btn btn-primary" href="{{route('admin.about.edit', $about)}}">Редактировать</a>
    </div>
@endsection
