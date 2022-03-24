<div class="container mt-100">
    <div class="row">
        <div class="col-md-6">
            <div class="team-wrap">
                <div class="img-wrap p-relative">
                    <a href="#"><img src="{{config('filesystems.disks.public.url').'/'.$product->image}}"></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h5>{{$product->name}}</h5>
            {{$product->description}}
            <div>
                <button class="btn btn-danger pr-5 pl-5 rounded-0 primary-bg-color">Оставить заявку</button>
            </div>
        </div>

    </div>
    <div class="pt-5 fr-slider fr-services bg-gray">
        <div class="container p-relative">
            {{--                <div class="section-title">--}}
            <h3 class="text-center">Изображения с товаром</h3>
            {{--                </div>--}}
            <div class="arrows">
                <span class="slick-prev"><i class="fas fa-chevron-left"></i></span>
                <span class="slick-next"><i class="fas fa-chevron-right"></i></span>
            </div>
            <div class="service-slide slider-wrap">
                <div class="item">
                    <div class="img-wrap">
                        <img src="{{asset('img/Product_2@1X.png')}}">
                    </div>
                    {{--                        <div class="content">--}}
                    {{--                            <h5>Workspace Safety</h5>--}}
                    {{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                    {{--                            <a href="#" class="theme-btn btn-white"><span>Read More</span></a>--}}
                    {{--                        </div>--}}
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="{{asset('img/Product_2@1X.png')}}">
                    </div>
                    {{--                        <div class="content">--}}
                    {{--                            <h5>Roadways Safety</h5>--}}
                    {{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                    {{--                            <a href="#" class="theme-btn btn-white"><span>Read More</span></a>--}}
                    {{--                        </div>--}}
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="{{asset('img/Product_2@1X.png')}}">
                    </div>
                    {{--                        <div class="content">--}}
                    {{--                            <h5>Safety Training</h5>--}}
                    {{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                    {{--                            <a href="#" class="theme-btn btn-white"><span>Read More</span></a>--}}
                    {{--                        </div>--}}
                </div>
                <div class="item">
                    <div class="img-wrap">
                        <img src="{{asset('img/Product_2@1X.png')}}">
                    </div>
                    {{--                        <div class="content">--}}
                    {{--                            <h5>Workspace Safety</h5>--}}
                    {{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
                    {{--                            <a href="#" class="theme-btn btn-white"><span>Read More</span></a>--}}
                    {{--                        </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
