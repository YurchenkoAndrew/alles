<div
    @foreach ($block as $item)
    @if ($item->id == 6)
    id="{{$item->slug}}"
    @endif
    @endforeach
>
    <div class="section primary-section">
        @if ($about != null)
        <div class="triangle"></div>
        @endif
        <div class="container">
            <div class="title">
                <h1>{{$commentTitle->title}}</h1>
                <p>{{$commentTitle->description}}</p>
            </div>
            <div class="row">
                @foreach ($comments as $comment)
                    <div class="span4">
                        <div class="testimonial">
                            <p>{{$comment->description}}</p>
                            <div class="whopic">
                                <div class="arrow"></div>
                                <img src="{{asset($comment->image)}}" class="centered" alt="{{$comment->name}}">
                                <strong>{{$comment->name}}
                                    <small>{{$comment->customer}}</small>
                                </strong>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            <p class="testimonial-text">--}}
{{--                "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to--}}
{{--                Take Away"--}}
{{--            </p>--}}
        </div>
    </div>
</div>
