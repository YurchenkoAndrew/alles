@extends('admin.layouts.app')
@section('content')
<div class="container">
    @component('admin.components.breadcrumbs-why-are-we')
        @slot('title') Редактирование @endslot
        @slot('home') Главная @endslot
        @slot('category') Почему мы? @endslot
        @slot('active') Редактирование @endslot
    @endcomponent
    <hr>
        <form action="{{route('admin.why-are-we.update', $whyAreWe)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.why-are-we._form')
        </form>
</div>
@endsection
