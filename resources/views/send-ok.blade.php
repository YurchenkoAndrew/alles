@extends('layouts.app-frontend')
@section('content')
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">
                    <img src="{{$settings->logo}}" width="120" height="40" alt="Logo"/>
                    <!-- This is website logo -->
                </a>
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-menu"></i>
                </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav" id="top-navigation">
                        <li class="active"><a href="{{route('index')}}">Главная</a></li>
                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>
    <!-- Start home section -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 align="center" class="badge-success">Сообщение отправлено!</h1>
            </div>
        </div>
    </div>
@endsection
