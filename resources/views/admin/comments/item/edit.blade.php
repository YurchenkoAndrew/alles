@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs-comments')
            @slot('title') Редактирование @endslot
            @slot('home') Главная @endslot
            @slot('category') {{$block->title}} @endslot
            @slot('active'){{$commentItem->name}} @endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.comment-item.update', $commentItem)}}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            {{@csrf_field()}}
            @include('admin.comments.item._form')
        </form>
    </div>
@endsection
