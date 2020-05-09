@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Блок {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
        <h1 align="center">{{$whoWeAre->title}}</h1>
        <h5 align="center">{{$whoWeAre->description}}</h5>
            <a class="btn btn-primary m-1" href="{{route('admin.who-we-are.edit', $whoWeAre)}}">Редактировать заголовок</a>
        <hr class="m-5">
        <div class="row">
            @foreach ($whoWeAreItems as $whoWeAreItem)
                <div class="col-sm">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">{{$whoWeAreItem->name}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                @if (isset($whoWeAreItem->image))
                                        <div><img style="width: 100%; max-width: 400px; max-height: 400px" src="{{asset($whoWeAreItem->image)}}" alt="{{$whoWeAreItem->name}}"></div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{$whoWeAreItem->profession}}</td>
                        </tr>
                        <tr>
                            <td>{{$whoWeAreItem->description}}</td>
                        </tr>
                        <tr>
                            <td>{{$whoWeAreItem->facebook}}</td>
                        </tr>
                        <tr>
                            <td>{{$whoWeAreItem->instagram}}</td>
                        </tr>
                        <tr>
                            <td>{{$whoWeAreItem->vkontakte}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary m-1" href="{{route('admin.who-we-are-item.edit', $whoWeAreItem)}}">Редактировать запись</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
