@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-slider')
            @slot('title')Обзор @endslot
            @slot('home') Главная @endslot
            @slot('category') Слайдер @endslot
            @slot('active') {{$slide->title}} @endslot
        @endcomponent
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Компонент</th>
                <th style="width: 80%" class="text-center" scope="col">Контент</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Сортировка</th>
                <td>{{$slide->sort}}</td>
            </tr>
            <tr>
                <th scope="row">Заголовок</th>
                <td>{{$slide->title}}</td>
            </tr>
            <tr>
                <th scope="row">Слоган</th>
                <td>{{$slide->slogan}}</td>
            </tr>
            <tr>
                <th scope="row">Описание</th>
                <td>{{$slide->description}}</td>
            </tr>
            <tr>
                <th scope="row">Изображение</th>
                <td>{{$slide->image}}</td>
            </tr>
            <tr>
                <th scope="row">Публикация</th>
                <td>
                    @if ($slide->published == 1)

                        <h4><span class="badge badge-success m-1">Опубликовано</span></h4>
                    @else
                        <h4><span class="badge badge-danger m-1">Не опубликовано</span></h4>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
        <hr>
        <a href="{{route('admin.slides.edit', $slide)}}" class="btn btn-primary">Править</a>
        <a href="#" class="btn btn-danger">Удалить</a>
    </div>
@endsection
