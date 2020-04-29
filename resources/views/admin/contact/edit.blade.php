@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-contact')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active'){{$contact->title}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.contact.update', $contact)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.contact._form')
        </form>
    </div>
@endsection
