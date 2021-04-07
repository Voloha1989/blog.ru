<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hazze Template">
    <meta name="keywords" content="Hazze, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('chat/css/bootstrap.min.css') }} " rel="stylesheet"/>
    <link href="{{ asset('chat/css/font-awesome.min.css') }} " rel="stylesheet"/>
    <link href="{{ asset('chat/css/themify-icons.css') }} " rel="stylesheet"/>
    <link href="{{ asset('chat/css/owl.carousel.min.css') }} " rel="stylesheet"/>
    <link href="{{ asset('chat/css/magnific-popup.css') }} " rel="stylesheet"/>
    <link href="{{ asset('chat/css/slicknav.min.css') }} " rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('chat/css/style.css') }} " rel="stylesheet"/>
</head>

<body>

<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('chat/img/laravel_logo.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">
                    <ul>
                        <li><a href="https://laravel.com/docs">Docs</a></li>
                        <li><a href="https://laracasts.com">Laracasts</a></li>
                        <li><a href="https://laravel-news.com">News</a></li>
                        <li><a href="https://blog.laravel.com">Blog</a></li>
                        <li><a href="https://nova.laravel.com">Nova</a></li>
                        <li><a href="https://forge.laravel.com">Forge</a></li>
                        <li><a href="https://github.com/laravel/laravel">GitHub</a></li>
                        <li></li>
                        <li></li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right text-center"
                                         aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item dropdown-item-fix" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ url('/home') }}">Home</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

<section class="hero-section set-bg" data-setbg="{{ asset('chat/img/space.jpg') }}">
    @yield('main_content')
</section>

<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-option">
                    <div class="fo-logo">
                        <a href="/">
                            <img src="{{ asset('chat/img/laravel_logo.svg') }}" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="fo-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget fw-links">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Model</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Join The Newsletter</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="news-form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5>Instagram</h5>
                    <div class="insta-pic">
                        <img src="img/instagram/instagram-1.jpg" alt="">
                        <img src="img/instagram/instagram-2.jpg" alt="">
                        <img src="img/instagram/instagram-3.jpg" alt="">
                        <img src="img/instagram/instagram-4.jpg" alt="">
                        <img src="img/instagram/instagram-5.jpg" alt="">
                        <img src="img/instagram/instagram-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
        </div>
    </div>
</section>

<script src="{{ asset('chat/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('chat/js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
