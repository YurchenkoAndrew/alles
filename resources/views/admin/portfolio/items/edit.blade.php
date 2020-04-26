@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-portfolio')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') Портфолио @endslot
            @slot('active') Секции @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.portfolio-item.update', $portfolioItem)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.portfolio.items._form')
        </form>
    </div>
@endsection
