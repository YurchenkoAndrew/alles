@extends('layouts.app-frontend')
@section('content')
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">
                    <img src="images/logo.png" width="120" height="40" alt="Logo"/>
                    <!-- This is website logo -->
                </a>
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <i class="icon-menu"></i>
                </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav" id="top-navigation">
                        <li class="active"><a href="#home">Главная</a></li>
                        @foreach ($block as $item)
                            @if ($item->published == 1 && $item->id != 5 && $item->id != 1 && $item->id != 7)
                                <li><a href="#{{$item->slug}}">{{$item->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>
    <!-- Start home section -->
    <div id="home">
        @if ($slider != null)
            @include('blocks.slider')
        @endif
    </div>
    <!-- End home section -->
    <!-- Service section start -->
    @if ($whoAreWe != null)
        @include('blocks.service')
    @endif
    <!-- Service section end -->
    <!-- Portfolio section start -->
    @if ($portfolioTitle != null)
        @include('blocks.portfolio')
    @endif
    <!-- Portfolio section end -->
    <!-- About us section start -->
    @if ($whoWeAre != null)
        @include('blocks.who-we-are')
    @endif
    @if ($about != null)
        @include('blocks.about')
    @endif
    <!-- About us section end -->
    @if ($commentTitle != null)
        @include('blocks.comments')
    @endif
    <!-- Client section start -->
    @if ($clientTitle != null)
        @include('blocks.our-clients')
    @endif
    <!-- Contact section start -->
    @if ($contact != null)
        @include('blocks.contact')
    @endif
    <!-- Contact section edn -->

@endsection
