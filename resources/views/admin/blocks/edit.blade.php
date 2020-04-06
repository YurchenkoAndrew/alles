@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('active') Слайд @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.block.update', $block)}}" method="post">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.blocks._form')
        </form>
    </div>
@endsection
