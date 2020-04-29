@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') {{$block->title}} @endslot
            @slot('home') Главная @endslot
            @slot('active') {{$block->title}} @endslot
        @endcomponent
        <hr>
        <h2 align="center">{{$contact->title}}</h2>
        <h4 align="center">{{$contact->description}}</h4>
        <hr>
        <p><strong>Адрес:</strong> {{$contact->address}}</p>
        @if (isset($contact->email))
            <p><strong>Email:</strong> {{$contact->email}}</p>
        @endif
        @if (isset($contact->phone_one))
            <p><strong>Телефон:</strong> {{$contact->phone_one}}</p>
        @endif
        @if (isset($contact->phone_two))
            <p><strong>Телефон:</strong> {{$contact->phone_two}}</p>
        @endif
        @if (isset($contact->facebook))
            <p><strong>Facebook:</strong> {{$contact->facebook}}</p>
        @endif
        @if (isset($contact->instagram))
            <p><strong>Instagram:</strong> {{$contact->instagram}}</p>
        @endif
        @if (isset($contact->vkontakte))
            <p><strong>Вконтакте:</strong> {{$contact->vkontakte}}</p>
        @endif
        @if (isset($contact->odnoklassniki))
            <p><strong>Одноклассники:</strong> {{$contact->odnoklassniki}}</p>
        @endif
        <a class="btn btn-primary m-1" href="{{route('admin.contact.edit', $contact)}}">Редактировать</a>
    </div>
@endsection
