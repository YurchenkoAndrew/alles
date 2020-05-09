@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-who-we-are')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active'){{$whoWeAre->title}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.who-we-are.update', $whoWeAre)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.who-we-are._form')
        </form>
    </div>
@endsection
