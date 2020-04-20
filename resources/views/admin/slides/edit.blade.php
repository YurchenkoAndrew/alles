@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-slider')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') Слайдер @endslot
            @slot('active'){{$slide->title}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.slides.update', $slide)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.slides._form')
        </form>
    </div>
@endsection
