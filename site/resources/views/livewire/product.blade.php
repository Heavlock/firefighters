<div class="container mt-100">
    <div class="row mt-100">
        <div class="col-md-6">
            <div class="fr-team fr-products">
                <div class="team-wrap">
                    <div class="img-wrap p-relative">
                        <a href="#"><img src="{{config('filesystems.disks.public.url').'/'.$product->image}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-info-wrap">
                <div class="section-title">
                    <h3>{{$product->name}}</h3>
                </div>
                {!!$product->description!!}
                <div>
                    <button wire:click="setOffer({{$product->id}},'{{$product->name}}')"
                            class="btn btn-danger pr-5 pl-5 rounded-0 primary-bg-color">Оставить заявку
                    </button>
                </div>
            </div>
        </div>
    </div>
    @if($videoExtension)
        <div class="m-5 text-center">
            <div class="section-title">
                <h3>Видео</h3>
            </div>
            <div class="fr-team fr-products">
                <div class="team-wrap">
                    <div class="img-wrap p-relative">
                        <video class="m-0-auto" width="720" height="540" controls preload="auto">
                            <source src="{{config('filesystems.disks.public.url').'/'.$video}}"
                                    type="video/{{$videoExtension}}">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(!$product->productImages->isEmpty())

        <div class="mt-5 pt-5 fr-slider fr-services bg-gray">
            <div class="container p-relative">
                <h3 class="text-center">Изображения с товаром</h3>
                <div class="arrows">
                    <span class="slick-prev"><i class="fas fa-chevron-left"></i></span>
                    <span class="slick-next"><i class="fas fa-chevron-right"></i></span>
                </div>
                <div class="service-slide slider-wrap">
                    @foreach($product->productImages as $img)
                        <div class="item">
                            <div class="img-wrap">
                                <img src="{{config('filesystems.disks.public.url').'/'.$img->img}}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


</div>
