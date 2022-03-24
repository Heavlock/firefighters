<footer class="section-padding dark-bg fr-footer p-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="company">
                    <div class="logo">
                        @include('parts.logo')
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                @include('parts.menu',['bottom'=>'bottom'])
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>@Copyright 2020. Все права защищены</p>
    </div>
</footer>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/counterup2.min.js')}}"></script>
<script src="{{asset('js/scrollreveal.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/main-page-slider.js')}}"></script>

