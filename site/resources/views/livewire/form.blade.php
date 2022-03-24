<section class="fr-contactForm section-padding pop-up {{$showForm?'':'d-none'}}">
    @include('parts.alerts')
    <div class="container position-relative m-5">
        <button wire:click="$set('showForm',false)" class="close-btn btn rounded btn-danger">X</button>
        <div class="row p-5">
            <div class="col-lg-12 col-md-12">
                <form wire:submit.prevent="submitEmail" class="contact-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input value="{{$user['name']}}" type="text" class="form-control" id="inputName"
                                   placeholder="Имя">
                        </div>
                        <div class="form-group col-md-6">
                            <input value="{{$user['email']}}" type="email" class="form-control" id="inputEmail"
                                   placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <input wire:model="messageSubject" type="text" class="form-control" id="inputSubject"
                                   placeholder="Тема">
                        </div>
                        <div class="form-group col-md-6">
                            <input value="{{$user['tel']}}" type="number" class="form-control" id="inputNumber"
                                   placeholder="Телефон">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea wire:model="messageText" class="form-control" id="exampleFormControlTextarea1"
                                      rows="4"
                                      placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                    <button class="theme-btn btn-outline">
                        Отправить
                    </button>
                </form>
            </div>
        </div>
    </div>
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

        .close-btn {
            position: absolute;
            right: -25px;
            z-index: 100;
            top: -20px;
        }
    </style>
</section>
