@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-portfolio')
            @slot('title') {{$portfolio->filter_name}} @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active') Фильтр @endslot
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
                <td>{{$portfolio->sort}}</td>
            </tr>
            <tr>
                <th scope="row">Название</th>
                <td>{{$portfolio->filter_name}}</td>
            </tr>
            </tbody>
        </table>
        <hr>
        <a href="{{route('admin.portfolio.edit', $portfolio)}}" class="btn btn-primary m-1">Редактировать</a>
        <button type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#modalDeleteFilter">Удалить</button>
    </div>
    @include('admin.portfolio._modal-delete-filter')
@endsection
