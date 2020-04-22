@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Почему мы? @endslot
            @slot('home') Главная @endslot
            @slot('active') Почему мы? @endslot
        @endcomponent
        <hr>
        @foreach ($content as $con)
            <h1 align="center">{{$con->title}}</h1>
            <h3 align="center">{{$con->slogan}}</h3>
            <hr>
            <div class="row">
                <div class="col-md" align="center">
                    <img style="width: 200px; height: 200px" src="{{asset($con->image_service_1)}}" alt="{{$con->title_service_1}}">
                    <h2>{{$con->title_service_1}}</h2>
                    <p>{{$con->description_service_1}}</p>
                </div>
                <div class="col-md" align="center">
                    <img style="width: 200px; height: 200px" src="{{asset($con->image_service_2)}}" alt="{{$con->title_service_2}}">
                    <h2>{{$con->title_service_2}}</h2>
                    <p>{{$con->description_service_2}}</p>
                </div>
                <div class="col-md" align="center">
                    <img style="width: 200px; height: 200px" src="{{asset($con->image_service_3)}}" alt="{{$con->title_service_3}}">
                    <h2>{{$con->title_service_3}}</h2>
                    <p>{{$con->description_service_3}}</p>
                </div>
            </div>
            <hr>
            <a href="{{route('admin.why-are-we.edit', $con)}}" class="btn btn-primary">Редактировать</a>
        @endforeach
    </div>
@endsection
