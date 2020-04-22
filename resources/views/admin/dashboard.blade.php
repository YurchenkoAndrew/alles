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

                            <span class="badge badge-success">Опубликованно</span>
                        @else
                            <span class="badge badge-danger">Не опубликованно</span>
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
                            "#"
                        @endif
                        @if ($block->id == 4)
                            "#"
                        @endif
                        @if ($block->id == 5)
                            "#"
                        @endif
                        @if ($block->id == 6)
                            "#"
                        @endif
                        @if ($block->id == 7)
                            "#"
                        @endif
                        @if ($block->id == 8)
                            "#"
                        @endif
                        @if ($block->id == 9)
                            "#"
                        @endif
                        class="btn btn-outline-primary">Редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </div>
@endsection
