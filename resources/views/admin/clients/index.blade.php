@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title')Блок {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
            <a class="btn btn-primary m-1" href="{{route('admin.client.edit', $client)}}"><i class="fas fa-pencil-alt"></i> Редактировать заголовок</a>
        <h2 align="center">{{$client->title}}</h2>
        <hr>
            <a class="btn btn-success mb-3 ml-1" href="{{route('admin.client-item.create')}}"><i class="fas fa-plus"></i> Добавить клиента</a>
        @foreach ($clientItems as $clientItem)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center" colspan="3" scope="col">Клиент {{$clientItem->sort}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Заголовок</th>
                        <td>{{$clientItem->title}}</td>
                        <td align="center" valign="middle" rowspan="3">
                            <a href="{{route('admin.client-item.edit', $clientItem)}}"
                               class="btn btn-outline-primary m-1"
                               title="Радактировать"><i class="fas fa-pencil-alt"></i></a>
                            <form onsubmit="if (confirm('Удалить')){return true} else {return false}" action="{{route('admin.client-item.destroy', $clientItem)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger m-1" title="Удалить"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Изображение</th>
                        <td>
                            @if (isset($clientItem->image))
                                    <div class="col-sm-10"><img style="width: 100%; max-width: 400px; max-height: 200px" src="{{asset($clientItem->image)}}" alt="{{$clientItem->title}}"></div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Ссылка</th>
                        <td>{{$clientItem->link}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
