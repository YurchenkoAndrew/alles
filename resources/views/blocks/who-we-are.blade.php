<div class="section primary-section"
     @foreach ($block as $item)
     @if ($item->id == 4)
     id="{{$item->slug}}"
    @endif
    @endforeach
>
    @if ($portfolioTitle != null)
        <div class="triangle"></div>
    @endif
    <div class="container">
        <div class="title">
            <h1>{{$whoWeAre->title}}</h1>
            <p>{{$whoWeAre->description}}</p>
        </div>
        <div class="row-fluid team">
            @foreach ($whoWeAreItems as $whoWeAreItem)
                <div class="span4" id="{{$whoWeAreItem->id}}-person">
                    <div class="thumbnail">
                        <img src="{{asset($whoWeAreItem->image)}}" alt="{{$whoWeAreItem->name}}">
                        <h3>{{$whoWeAreItem->name}}</h3>
                        <ul class="social">
                            <li>
                                <a href="{{$whoWeAreItem->facebook}}" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$whoWeAreItem->instagram}}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$whoWeAreItem->vkontakte}}">
                                    <i class="fab fa-vk"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>{{$whoWeAreItem->profession}}</h2>
                            <p>{{$whoWeAreItem->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="about-text centered">
        </div>
    </div>
</div>
