@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Блок {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
            <a href="{{route('admin.portfolio-title.edit', $portfolioTitle)}}" class="btn btn-primary m-1"><i
                    class="far fa-edit"></i> Редактировать заголовок и описание</a>
        <h2 align="center">{{$portfolioTitle->title}}</h2>
        <p align="center">{{$portfolioTitle->description}}</p>
        <!--            --><?php //dd($titles); ?>
        <hr>
            <a href="{{route('admin.portfolio.create')}}" class="btn btn-success m-1"><i class="fas fa-plus"></i> Добавить фильтр</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th colspan="10" scope="col" style="text-align: center">Фильтры</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($filters as $filter)
                        <td>
                            <h4>{{$filter->sort}}) {{$filter->filter_name}}</h4>
                            <div align="right" style="float: right">
                                <a href="{{route('admin.portfolio.show', $filter)}}"
                                   class="btn btn-outline-success m-1"
                                   title="Смотреть"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.portfolio.edit', $filter)}}"
                                   class="btn btn-outline-primary m-1"
                                   title="Радактировать"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                        </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
        <hr>
            <h3 align="center">Секции {{$block->title}}</h3>
            <a href="{{route('admin.portfolio-item.create')}}" class="btn btn-success m-1"><i class="fas fa-plus"></i> Добавить секцию</a>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--                <th scope="col">#</th>--}}
                <th scope="col">Заголовок</th>
                <th class="visible-md" scope="col">Категория</th>
                <th style="text-align: center" scope="col">Публикация</th>
                <th style="text-align: center" scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($portfolioItems as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td class="visible-md">{{$item->filter->filter_name ?? ''}}</td>
                        <td align="center">
                            @if ($item->published == 1)

                                <h1><span class="badge badge-success m-1"><i class="fas fa-check"></i></span></h1>
                            @else
                                <h1><span class="badge badge-danger m-1"><i class="fas fa-ban"></i></span></h1>
                            @endif
                        </td>
                        <td align="center">
                            <a href="{{route('admin.portfolio-item.show', $item)}}" class="btn btn-outline-success m-1" title="Смотреть"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.portfolio-item.edit', $item)}}" class="btn btn-outline-primary m-1" title="Радактировать"><i
                                    class="fas fa-pencil-alt"></i></a>
{{--                            <button type="button" class="btn btn-outline-danger m-1" data-toggle="modal"--}}
{{--                                    data-target="#modalDelete" title="Удалить"><i class="fas fa-trash-alt"></i></button>--}}
                        </td>
                    </tr>
{{--                    @include('admin.portfolio._modal-delete')--}}
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
