<section class="section-padding fr-team fr-products">
    <div class="container">
        <div class="section-title">
            <h3>Товары</h3>
        </div>
        <div class="row">
            @foreach($products as $product)
{{--                <div class="col-md-6" wire:click="$set('productId',{{$product->id}})">--}}
                <div class="col-md-6">
                    <a href="/product/{{$product->id}}">
                        <div class="team-wrap">
                            <div class="img-wrap p-relative primary-overlay">
                                <img
                                    src="{{config('filesystems.disks.public.url').'/'.$product->image}}">
                            </div>
                            <div class="name">
                                <h5>{{$product->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

