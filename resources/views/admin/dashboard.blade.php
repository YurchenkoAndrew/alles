@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @foreach($blocks as $block)
            <div class="row">
                <div class="col-sm">
                    <a href="#">{{$block->title}}</a>
                </div>
                <div class="col-sm">
                        @if ($block->published == 1)

                        <span class="badge badge-success">Опубликованно</span>
                        @else
                        <span class="badge badge-danger">Не опубликованно</span>
                        @endif
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
