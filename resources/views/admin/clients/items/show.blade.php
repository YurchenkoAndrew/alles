@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-slider')
            @slot('title'){{$clientItem->title}} @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active') {{$clientItem->title}} @endslot
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
                <td>{{$clientItem->sort}}</td>
            </tr>
            <tr>
                <th scope="row">Заголовок</th>
                <td>{{$clientItem->title}}</td>
            </tr>
            <tr>
                <th scope="row">Изображение</th>
                <td>
                    <img style="width: 100%; max-width: 740px; max-height: 660px" src="{{asset($clientItem->image)}}" alt="{{$clientItem->title}}">
                </td>
            </tr>
            </tbody>
        </table>
        <hr>
        <a href="{{route('admin.client-item.edit', $clientItem)}}" class="btn btn-primary m-1">Редактировать</a>
        <button type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#modalDelete">Удалить</button>
    </div>
    @include('admin.slides._modal-delete')
@endsection
