@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-settings')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') Настройки @endslot
            @slot('active') Редактирование @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.settings.update', $setting)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.settings._form')
        </form>
    </div>
@endsection
