<div class="pop-up {{$showProp?'':'d-none'}}">
    <section class="fr-contactForm section-padding">
        <div class="container">
            <div class="row">
                    <div class="form-group col-md-5">
                        <button class="btn btn-lg btn-danger m-3" wire:click="delete">Удалить</button>
                    </div>
                    <div class="form-group col-md-5">
                        <button class="btn btn-lg btn-light m-3" wire:click="$set('showProp',false)">Отмена</button>
                    </div>
            </div>
        </div>
    </section>
    <style>
        .pop-up {
            position: fixed;
            overflow: hidden;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(204, 204, 204, 0.55);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
    </style>
</div>
