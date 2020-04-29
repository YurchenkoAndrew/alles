@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-client')
            @slot('title') Создать @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active')Создать @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.client-item.store')}}" method="post" enctype="multipart/form-data">
{{--            @method('PUT')--}}
            {{@csrf_field()}}
            @include('admin.clients.items._form')
        </form>
    </div>
@endsection
