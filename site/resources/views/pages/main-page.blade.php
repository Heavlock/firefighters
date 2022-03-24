@extends('master')

@section('content')
    <header class="banner-padding primary-overlay fr-banner1">
        @include('parts.slider-main')

    </header>
    <div class="banner-stickers">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="stick-wrap">
                        <span class="flaticon-fireman icon"></span>
                        {!! $content->first_screen_block1 !!}
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="stick-wrap">
                        <span class="flaticon-fire-truck icon"></span>
                        {!! $content->first_screen_block2 !!}
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="stick-wrap">
                        <span class="flaticon-bonfire icon"></span>
                        {!!$content->first_screen_block3!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding fr-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="d-flex img-wrapper align-items-center">
                        <div class="img-cover">
                            <img src="{{config('filesystems.disks.public.url').'/'.$content->second_screen_img}}">
                        </div>
                        <!--                    <div class="img-cover">-->
                    <!--                        <img src="{{asset('img/About_2@1X.png')}}">-->
                        <!--                    </div>-->
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 justify-content-center">
                    <div class="content-wrap">
                        <div class="section-title">
                            <h3 class="left">{{$content->second_screen_title}}</h3>
                        </div>
                        <div class="wrapper">
                            {!!  $content-> second_screen_description !!}
                        </div>
                        {{--                        <a href="#" class="theme-btn"><span>Read More</span></a>--}}
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 768px) {
                .fr-banner1 {
                    background-image: url('{{config('filesystems.disks.public.url').'/'.$content->first_screen_img}}');
                }

                .banner-padding {
                    padding-top: 250px;
                    padding-bottom: 200px;
                }
            }
            .banner-padding {
                padding-top: 0!important;
                /*padding-bottom: 200px;*/
            }
            .banner-inner p, .banner-inner span, .banner-inner strong {
                color: #fff !important;
            }
        </style>
    </section>
    @include('parts.catalog')
    @include('parts.form' ,['content'=>$content])
@endsection

