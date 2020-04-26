@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Слайдер @endslot
            @slot('home') Главная @endslot
            @slot('active') Слайдер @endslot
        @endcomponent
        <hr>
            <a href="{{route('admin.slides.create')}}" class="btn btn-success">Создать <i class="fa fa-plus"></i></a>
            <hr>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Заголовок</th>
{{--                <th scope="col">Подзаголовок</th>--}}
{{--                <th scope="col">Описание</th>--}}
{{--                <th scope="col">Изображение</th>--}}
                <th scope="col">Опубликовано</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($slides as $slide)
                <tr>
                    <th scope="row">{{$slide->sort}}</th>
                    <td>{{$slide->title}}</td>
{{--                    <td>{{$slide->slogan}}</td>--}}
{{--                    <td>{{$slide->description}}</td>--}}
{{--                    <td>{{$slide->image}}</td>--}}
                    <td>
                        @if ($slide->published == 1)

                            <h1><span class="badge badge-success m-1"><i class="fas fa-check"></i></span></h1>
                        @else
                            <h1><span class="badge badge-danger m-1"><i class="fas fa-ban"></i></span></h1>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.slides.show', $slide)}}" class="btn btn-outline-success m-1" title="Смотреть"><i class="fas fa-eye"></i></a>
                        <a href="{{route('admin.slides.edit', $slide)}}" class="btn btn-outline-primary m-1" title="Радактировать"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal" data-target="#modalDelete" title="Удалить"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.slides._modal-delete')
@endsection
