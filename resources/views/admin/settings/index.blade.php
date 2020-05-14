@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Настройки @endslot
            @slot('home') Главная @endslot
            @slot('active') Настройки @endslot
        @endcomponent
        <hr>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Параметр</th>
                <th scope="col">Значение</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Логотип</th>
                <td style="background: rgba(14,14,14,0.50)">
                    <img style="width: 100%; max-width: 240px; max-height: 80px" src="{{asset($setting->logo)}}" alt="{{$setting->title}}">
                </td>
            </tr>
            <tr>
                <th scope="row">Заголовок</th>
                <td>{{$setting->title}}</td>
            </tr>
            <tr>
                <th scope="row">Описание</th>
                <td>{{$setting->description}}</td>
            </tr>
            <tr>
                <th scope="row">OG изображение</th>
                <td style="background: rgba(14,14,14,0.50)">
                    <img style="width: 100%; max-width: 600px; max-height: 600px" src="{{asset($setting->og_image)}}" alt="{{$setting->title}}">
                </td>
            </tr>
            <tr>
                <th scope="row">Ключевые слова</th>
                <td>{{$setting->keywords}}</td>
            </tr>
            </tbody>
        </table>
            <a class="btn btn-primary" href="{{route('admin.settings.edit', $setting)}}">Редактировать</a>
@endsection
