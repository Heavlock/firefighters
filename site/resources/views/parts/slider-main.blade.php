<div class="container-fluid main-page-slider-wrap">

    <div class="main-page-slider">
        <div class="banner-inner position-relative">
            <div class="slider-text">
                <div class="section-title">
                    <h3 class="text-white">{{$content->first_screen_title}}</h3>
                </div>
                {!!$content->first_screen_description!!}
                <a href="#" class="theme-btn"><span>Learn More</span></a>
            </div>
            <img class="" src="{{config('filesystems.disks.public.url').'/'.$content->first_screen_img}}"/>
        </div>
        <div class="banner-inner position-relative">
            <div class="slider-text">
                <div class="section-title">
                    <h3 class="text-white">{{$content->first_screen_title}}</h3>
                </div>
                {!!$content->first_screen_description!!}
                <a href="#" class="theme-btn"><span>Learn More</span></a>
            </div>
            <img class="" src="{{config('filesystems.disks.public.url').'/'.$content->first_screen_img}}"/>
        </div>
    </div>

</div>
