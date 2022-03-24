<div class="container mt-100 mb-5 min-height-100vh">

    <h1>Личный кабинет</h1>
    @forelse($user['products'] as $index=>$product)
        <div class="mb-5">
            <div class="d-flex flex-wrap align-items-center justify-content-start p-1 mt-1">
                <div>
                    <h5 class="p-0 m-0 mr-5">Ваш продукт: {{$product['name']}}</h5>
                </div>
                <div class="d-flex align-items-center">
                    <img class="width-200" src="{{config('filesystems.disks.public.url').'/'.$product['image']}}">
                </div>
            </div>
            <hr>
            <div class="d-flex flex-wrap align-items-center justify-content-start p-1 mt-1">
                <div>
                    <h5 class="p-0 m-0 mr-5">Срок окончания
                        действия: <span
                            class="text-primary">{{\Carbon\Carbon::parse($user['subscriptions'][$index]['subscribetime'])->diffForHumans()}}</span>
                    </h5>
                </div>
            </div>
            <hr>
            <div class="d-flex flex-wrap align-items-start justify-content-around flex-column p-1 mt-1">
                <button wire:click="$emitTo('form','show','{{$product['name']}}')"
                        class="btn btn-warning rounded-0 width-200 mb-3">Обратная Связь
                </button>
                <button wire:click="$emitTo('delete-popup','show',{{$user['subscriptions'][$index]['id']}})"
                        class="btn btn-danger primary-bg-color rounded-0 width-200 mb-3">
                    Прекратить Договор
                </button>
            </div>
        </div>
        <hr>
        <hr>
    @empty
        <p>У вас еще нет активных подписок</p>
    @endforelse
    <livewire:delete-popup/>
    <livewire:form :user="$user"/>
</div>
