@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-slider')
            @slot('title') Создать @endslot
            @slot('home') Главная @endslot
            @slot('category') Слайдер @endslot
            @slot('active')Создать @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.slides.store')}}" method="post" enctype="multipart/form-data">
{{--            @method('PUT')--}}
            {{@csrf_field()}}
            @include('admin.slides._form')
        </form>
    </div>
@endsection
