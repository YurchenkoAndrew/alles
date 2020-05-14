<div class="section secondary-section "
     @foreach ($block as $item)
     @if ($item->id == 3)
     id="{{$item->slug}}"
    @endif
    @endforeach
>
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>{{$portfolioTitle->title}}</h1>
            <p>{{$portfolioTitle->description}}</p>
        </div>
        <ul class="nav nav-pills">
            <li class="filter" data-filter="all">
                <a href="#noAction">Все</a>
            </li>
            @foreach ($filters as $filter)
                <li class="filter" data-filter="{{$filter->slug}}">
                    <a href="#noAction">{{$filter->filter_name}}</a>
                </li>
            @endforeach
        </ul>
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">
            @foreach ($portfolioItems as $item)
                <div id="slidingDiv{{$item->id}}" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="{{asset($item->image)}}" alt="project 1"/>
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>{{$item->title}}</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                            </div>
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
        @endforeach
        <!-- End details for portfolio project 1 -->
            <ul id="portfolio-grid" class="thumbnails row">
                @foreach ($portfolioItems as $item)
                    <li class="span4 mix {{$item->filter->slug}}">
                        <div class="thumbnail">
                            <img src="{{asset($item->image)}}" alt="{{$item->title}}">
                            <a href="#single-project" class="more show_hide" rel="#slidingDiv{{$item->id}}">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>{{$item->title}}</h3>
                            <p>Alles.kz</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
