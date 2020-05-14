@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Блок</th>
                <th scope="col">Публикация</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blocks as $block)
                <tr>
                    <th scope="row"><a href="{{route('admin.block.edit', $block)}}">{{$block->title}}</a></th>
                    <td>
                        @if ($block->published == 1)
                            <h1><span class="badge badge-success m-1"><i class="fas fa-check"></i></span></h1>
                        @else
                            <h1><span class="badge badge-danger m-1"><i class="fas fa-ban"></i></span></h1>
                        @endif
                    </td>
                    <td><a href=
                           @if ($block->id == 1)
                               "{{route('admin.slides.index')}}"
                        @endif
                        @if ($block->id == 2)
                            "{{route('admin.why-are-we.index')}}"
                        @endif
                        @if ($block->id == 3)
                            "{{route('admin.portfolio.index')}}"
                        @endif
                        @if ($block->id == 4)
                            "{{route('admin.who-we-are.index')}}"
                        @endif
                        @if ($block->id == 5)
                            "{{route('admin.about.index')}}"
                        @endif
                        @if ($block->id == 6)
                            "{{route('admin.comment.index')}}"
                        @endif
                        @if ($block->id == 7)
                            "{{route('admin.client.index')}}"
                        @endif
                        @if ($block->id == 8)
                            "{{route('admin.contact.index')}}"
                        @endif
                        class="btn btn-outline-primary">Изменить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </div>
@endsection
