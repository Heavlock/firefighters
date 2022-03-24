<section class="fr-contactForm section-padding">
    <div class="container">
        <div class="section-title">
            <h3 class="">{{$content->contact_form_title}}</h3>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-4 col-md-6">
                {!!$content->contact_form_text!!}
            </div>
            <div class="col-lg-8 col-md-6">
                <form class="contact-form" method="POST" action="{{route('formPageAction')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Имя"
                                   value="">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="number" class="form-control" name="inputNumber" id="inputNumber"
                                   placeholder="Телефон">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="messageText" id="exampleFormControlTextarea1" rows="4"
                                      placeholder="Сообщение"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="theme-btn btn-outline float-right">
                        Отправить
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
