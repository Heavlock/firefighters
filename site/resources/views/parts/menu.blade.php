<div class="menu-wrapper {{$bottom??''}}">
    <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a href="{{route('home')}}" class="panel-link">
                        Главная
                    </a>
                </h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="panel-link" href="{{route('catalog')}}">
                        Каталог
                    </a>
                </h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <a class="panel-link" href="{{route('formPage')}}">
                        Обратная связь
                    </a>
                </h4>
            </div>
        </div>

    </div>
</div>
