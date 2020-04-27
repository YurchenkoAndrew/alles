@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-portfolio')
            @slot('title') {{$item->title}} @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active') Секция @endslot
        @endcomponent
        <hr>
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
                <td>{{$item->sort}}</td>
            </tr>
            <tr>
                <th scope="row">Фильтр</th>
                <td>{{$item->filter->filter_name}}</td>
            </tr>
            <tr>
                <th scope="row">Изображение</th>
                <td>
                    <img style="width: 100%; max-width: 640px; max-height: 400px" src="{{asset($item->image)}}" alt="{{$item->title}}">
                </td>
            </tr>
            <tr>
                <th scope="row">Заголовок</th>
                <td>{{$item->title}}</td>
            </tr>
            <tr>
                <th scope="row">Описание</th>
                <td>{{$item->description}}</td>
            </tr>
            <tr>
                <th scope="row">Публикация</th>
                <td>
                    @if ($item->published == 1)

                        <h4><span class="badge badge-success m-1">Опубликовано</span></h4>
                    @else
                        <h4><span class="badge badge-danger m-1">Не опубликовано</span></h4>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
        <hr>
        <a href="{{route('admin.portfolio-item.edit', $item)}}" class="btn btn-primary m-1">Редактировать</a>
        <button type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#modalDeleteItem">Удалить</button>
    </div>
    @include('admin.portfolio.items._modal-delete')
@endsection
