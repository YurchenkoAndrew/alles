@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-client')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active'){{$clientItem->title}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.client-item.update', $clientItem)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.clients.items._form')
        </form>
    </div>
@endsection
