<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>{{$clientTitle->title}}</h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                @foreach ($clientItems as $clientItem)
                    <li>
                        @if($clientItem->link != null)
                            <a href="{{$clientItem->link}}" target="_blank">
                                <img src="{{asset($clientItem->image)}}" alt="{{$clientItem->title}}">
                            </a>
                        @else
                            <img src="{{asset($clientItem->image)}}" alt="{{$clientItem->title}}">
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
