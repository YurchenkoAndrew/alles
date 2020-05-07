<div class="section primary-section"
     @foreach ($block as $item)
     @if ($item->id == 2)
     id="{{$item->slug}}"
    @endif
    @endforeach
>
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>{{$whoAreWe->title}}</h1>
            <!-- Section's title goes here -->
            <p>{{$whoAreWe->slogan}}</p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="{{asset($whoAreWe->image_service_1)}}"
                             alt="{{$whoAreWe->title_service_1}}">
                    </div>
                    <h3>{{$whoAreWe->title_service_1}}</h3>
                    <p>{{$whoAreWe->description_service_1}}</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="{{asset($whoAreWe->image_service_2)}}"
                             alt="{{$whoAreWe->title_service_2}}"/>
                    </div>
                    <h3>{{$whoAreWe->title_service_2}}</h3>
                    <p>{{$whoAreWe->description_service_2}}</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="{{asset($whoAreWe->image_service_3)}}"
                             alt="{{$whoAreWe->title_service_3}}">
                    </div>
                    <h3>{{$whoAreWe->title_service_3}}</h3>
                    <p>{{$whoAreWe->description_service_3}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
