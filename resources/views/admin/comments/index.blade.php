@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
        <h2 align="center">{{$comment->title}}</h2>
        <h4 align="center">{{$comment->description}}</h4>
            <a class="btn btn-primary m-1" href="{{route('admin.comment.edit', $comment)}}">Редактировать заголовки</a>
        <hr>
        <div class="row">
            @foreach ($commentItems as $commentItem)
                <div class="col-sm">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center" colspan="2" scope="col">Секция {{$commentItem->sort}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Сортировка</th>
                            <td>{{$commentItem->sort}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Имя</th>
                            <td>{{$commentItem->name}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Отношения</th>
                            <td>{{$commentItem->customer}}</td>
                        </tr>
                        <tr>
                            <th style="text-align: center" scope="row">Изображение<br>200x200</th>
                            <td>
                                @if (isset($commentItem->image))
                                        <div><img style="width: 100%; max-width: 200px; max-height: 200px" src="{{asset($commentItem->image)}}" alt="{{$commentItem->name}}"></div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Комментарий</th>
                            <td>{{$commentItem->description}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><a class="btn btn-primary" href="{{route('admin.comment-item.edit', $commentItem)}}">Редактировать запись</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
@endsection
