@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-client')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active'){{$client->title}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.client.update', $client)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.clients._form')
        </form>
    </div>
@endsection
