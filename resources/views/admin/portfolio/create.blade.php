@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-portfolio')
            @slot('title') Добавить @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active') Фильтр @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.portfolio.store')}}" method="post" enctype="multipart/form-data">
            {{--            @method('PUT')--}}
            {{@csrf_field()}}
            @include('admin.portfolio._form')
        </form>
    </div>
@endsection
