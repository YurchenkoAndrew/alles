<!-- Start cSlider -->
<div id="da-slider" class="da-slider">
    <div class="triangle"></div>
    <!-- mask elemet use for masking background image -->
    <div class="mask"></div>
    <!-- All slides centred in container element -->
    <div class="container">
        <!-- Start first slide -->
        @foreach ($slider as $slide)
            <div class="da-slide">
                <h2 class="fittext2">{{$slide->title}}</h2>
                <h4>{{$slide->slogan}}</h4>
                <p>{{$slide->description}}</p>
                <div class="da-img">
                    <img src="{{asset($slide->image)}}" alt="image01" width="320">
                </div>
            </div>
    @endforeach
    <!-- End first slide -->
        <!-- Start cSlide navigation arrows -->
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
        <!-- End cSlide navigation arrows -->
    </div>
</div>
