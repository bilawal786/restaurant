<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{$gs->sitename}}</title>

    <meta name="author" content="themesflat.com" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('front/assets/icon/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/assets/icon/logo.png')}}">

    <style>
        .slider .slider-item .page-tittle-slider .heading-tittle h1 {
            line-height: 155px;
            text-transform: uppercase;
            letter-spacing: -4.5px;
            font-weight: 400;
        }
        .wrap-video a {
            background-color: #fff;
            padding: 48.5px 49.5px;
            text-align: center;
            color: #c8a96a;
            border-radius: 50%;
        }
        .page-title{
            position: relative;
            padding-top: 229px;
            padding-bottom: 158px;
            background:linear-gradient(150deg,  rgba(2,6,9,0.93) 33%,  rgba(2,6,9,0) 77%), url("{{asset('front/img_bg_slider_home01.jpg')}}") no-repeat fixed center center ;
            z-index: 100;
            background-size: cover;
        }
        .button {
            background-color: #ff9858;
            border: none;
            color: white;
            padding: 20px 38px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            width: 100%;
        }
        .p-100{
            padding: 100px;
        }
        @media only screen and (max-width: 600px) {
           .p-100{
               padding: 0px;
           }
        }
    </style>
</head>

<body class="counter-scroll header-fixed">
<!-- Preloader -->
<div id="loading-overlay">
    <div class="loader"></div>
</div>
<div id="wrapper">
    <div id="page" class="clearfix">
        <header id="site-header">
            <div id="site-header-inner" class="container-fluid">
                <div class="wrap-inner flex">
                    <div class="cleafix">
                        <a href="{{route('front.index')}}" class="logo">
                            <img style="height: 50px" src="{{asset($gs->logo)}}" alt="">
                        </a>
                    </div>
                    <div class="mobile-button">
                        <span></span>
                    </div><!-- /.mobile-button -->
                    <nav id="main-nav" class="main-nav">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item current-menu-item">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="menu-item ">
                                <a href="">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /#main-nav -->
                    <div class="header-contact">
									<span class="address">
										{{$gs->phone}}
									</span>
                    </div>
                </div>
            </div>
        </header>
        <!-- page-title -->
        <section class="page-title" style="height: 100vh">
            <div class="slider">
                <div class="img-bg2">
{{--                    <img src="{{asset('front/assets/img/slider/img_bg2.png')}}" alt="">--}}
                </div>
                <div class="swiper-container mainslider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="">
                                <div class="container-fluid">
                                    <div class="page-tittle-slider distance">
                                        <div class="heading-tittle">

                                        </div>
                                        <div class="wrap-video">
                                            <a href="https://www.youtube.com/watch?v=ySd-XWQWhbI" class="popup-youtube">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="swiper-button-next btn-slide-next"></div>--}}
{{--                    <div class="swiper-button-prev btn-slide-prev active"></div>--}}
                </div>
            </div>
        </section>
        <!-- page-title -->

        <!-- best category -->
        <section class="tf-section wrap-category">
            <div class="overlay-bg-style01"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 cleafix">
                        <div class="content-heading-wrap">
                            <div class="tf-heading-bg color-style1 cleafix">
                                <h2 class="heading-bg-style">CATÉGORIE</h2>
                            </div>
                            <div class="tf-heading text-center">
                                <h4 class="tf-title wow zoomIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">choisissez votre meilleure catégorie</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset($content->image_1)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($content->image_2)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <img src="{{asset($content->image_3)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($content->image_4)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center p-100">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 style="font-size: 50px">BIEN ÊTRE AU TRAVAIL</h1>
                    </div>
                    <div class="col-md-12">
                        <h1 style="font-size: 120px; font-weight: 900; color: black">M A M I K O O K</h1>
                    </div>
                    <div class="col-md-12">
                        <h1 style="font-size: 50px">CANTINE DIGITALE</h1>
                    </div>
                </div>
                <button class="button">LA PAUSE DÉJEUNE DEVIENT UN PLAISIR!
                </button>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                       {!! $content->d_1 !!}
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($content->image_5)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset($content->image_6)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                    <div class="col-md-6">
                        {!! $content->d_2 !!}
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        {!! $content->d_3 !!}
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($content->image_7)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset($content->image_8)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                    <div class="col-md-6">
                        {!! $content->d_4 !!}
                    </div>
                </div>
            </div>
            <div class="container mt-5 text-center">
                <div class="row">
                    <div class="col-md-6 mt-5" style="padding: 20px">
                        <h1 style="color: #ff9858">
                            <b>
                                {{$content->h_3}}
                            </b>
                        </h1>
                        <h3>
                           {{$content->d_5}}
                        </h3>

                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($content->image_9)}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6" style="padding: 20px">
                        <h1 style="color: #ff9858">
                            <b>
                                {{$content->h_4}}
                            </b>
                        </h1>
                        <h3>
                            {{$content->d_6}}
                        </h3>

                    </div>
                </div>
            </div>
            <div class="container mt-5 text-center">
                <div class="row">
                    <div class="col-md-6" style="padding: 20px">
                        <img src="{{asset($content->image_10)}}" class="img-rounded" alt="Cinque Terre" width="100%">

                    </div>
                    <div class="col-md-6 mt-5">
                        <h1 style="color: #ff9858">
                            <b>
                                {{$content->h_5}}
                            </b>
                        </h1>
                        <h3>
                            {{$content->d_7}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center" style="padding: 100px">
                    <div class="col-md-12">
                        <img src="{{asset('front/logo.jpeg')}}" class="img-rounded" alt="Cinque Terre" width="100%">
                    </div>
                    <div class="col-md-12">
                        <h1 style="font-size: 80px; font-weight: 900; color: black">{{$content->h_6}}</h1>
                    </div>
                    <div class="col-md-12">
                        <h1 style="font-size: 40px">{{$content->h_7}}
                        </h1>
                    </div>
                </div>
                <button class="button">Infinity 88
                </button>
            </div>
        </section>
        <!-- best category -->

        <!-- footer -->
        <footer id="footer" class="footer-style01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-footer">
                            <a href=""><img style="height: 100px" src="{{asset($gs->logo)}}" alt="images"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-link widget-footer">
                            <h4 class="widget-title">À propos de nous</h4>
                            <ul class="widget-list">
                                <li>{{$gs->footer}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-link widget-Facilities widget-footer">
                            <h4 class="widget-title">Facilities</h4>
                            <ul class="widget-list">
                                <li><a href="#">The Fontus Spa</a></li>
                                <li><a href="#">Experiences</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 no-pd-left">
                        <div class="widget widget-link widget-contact widget-footer">
                            <h4 class="widget-title">Contact</h4>
                            <ul class="widget-list">
                                <li class="adress margin-right-1">{{$gs->address}}</li>
                                <li class="mail">{{$gs->email}}</li>
                                <li class="phone">{{$gs->phone}}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- scroll-top -->

                    <!-- scroll-top -->
                    <div class="col-md-12">
                        <div id="bottom" class="tf-bottom-inner">
                            <div class="Copyright">
                                <p>Copyright © 2021 . Designed by <a href="https://ikaedigital.com">Ikae Digital</a></p>
                            </div>
                            <ul class="widget widget_socials">
                                <li><a href="{{$gs->facebook}}" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$gs->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->
    </div><!-- Page  -->
</div><!-- Wrapper -->
<!-- Javascript -->
<script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front/assets/js/shortcodes.js')}}"></script>
<script src="{{asset('front/assets/js/main.js')}}"></script>
<script src="{{asset('front/assets/js/countto.js')}}"></script>
<script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/assets/js/jquery-validate.js')}}"></script>
<script src="{{asset('front/assets/js/wow.min.js')}}"></script>
<script src="{{asset('front/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/assets/js/swiper.js')}}"></script>
</body>
</html>

