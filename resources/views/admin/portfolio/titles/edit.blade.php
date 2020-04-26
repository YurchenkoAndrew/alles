@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-portfolio')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') Портфолио @endslot
            @slot('active') Заголовки @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.portfolio-title.update', $portfolioTitle)}}" method="post"
              enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.portfolio.titles._form')
        </form>
    </div>
@endsection
