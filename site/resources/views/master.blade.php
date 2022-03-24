<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('parts.head',['title'=>$title??false])
    @livewireStyles
</head>
<body>
<div class="sidenav-overlay">
    <div class="sidenav-menu" id="mobile">
        <div class="top-bar">
            <div class="logo">
                @include('parts.logo')
            </div>
            <button class="close-btn"><span></span><span></span></button>
        </div>
        @include('parts.menu')
        {{--        <div class="info">--}}
        {{--            <h5>GET UPDATES</h5>--}}
        {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et--}}
        {{--                dolore.</p>--}}
        {{--        </div>--}}
        {{--        <div class="social-links">--}}
        {{--            <h5>Follow Us</h5>--}}
        {{--            <div class="networks">--}}
        {{--                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
        {{--                <a href="#"><i class="fab fa-twitter"></i></a>--}}
        {{--                <a href="#"><i class="fab fa-instagram"></i></a>--}}
        {{--                <a href="#"><i class="fab fa-apple"></i></a>--}}
        {{--                <a href="#"><i class="fab fa-pinterest-p"></i></a>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>
<nav class="mr-nav">
    <div class="container">
        <div class="nav-inner">
            <div class="logo">
                @include('parts.logo')
            </div>
            <div class="menus">
                <ul class="inline-block">

                    <li><a href="{{route('home')}}">Главная</a>
                    </li>
                    <li><a href="{{route('catalog')}}">Каталог</a>
                    </li>
                    <li><a href="{{route('formPage')}}">Обратная Связь</a>
                    </li>
                </ul>
                <div class="search-wrapper">
                    <div class="d-flex align-items-center">
                        @auth
                            @if(auth()->user()->role_id==1)
                                <a class="btn btn-sm btn-outline-primary" href="/admin">админка</a>
                            @elseif(auth()->user()->role_id==3)
                                <a class="m-2" href="{{route('account')}}"> <img class="account-icon" width="30px"
                                                                                 src="{{asset('img/user_icon.png')}}"
                                                                                 alt="personal account"></a>
                                <form class="m-2" method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            @else
                                <span class="text-danger">Аккаунт еще не активирован</span>
                                <form class="m-2" method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            @endif
                        @else

                            <a class="text-primary small p-1 ml-1 border border-primary" href="{{ route('login') }}">Войти</a>
                            <a class="text-primary small p-1 ml-1 border border-primary" href="{{ route('register') }}">Регистрация</a>
                            </ul>
                        @endauth
                    </div>
                </div>


            </div>
            <button class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>
@include('parts.alerts')
@yield('content')
{{--{{setting('site.google_analytics_tracking_id')}}--}}
@livewireScripts
@include('parts.footer')
</body>
</html>
