<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<?php
$gs = \App\GeneralSettings::find(1);
$content = \App\Content::find(1);
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            background:linear-gradient(150deg,  rgba(2,6,9,0.93) 33%,  rgba(2,6,9,0) 77%), url("{{asset($content->header_image)}}") no-repeat fixed center center ;
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
        .container{
            width: 80% !important;
        }
        @media only screen and (max-width: 600px) {
            .p-100{
                padding: 0px;
            }
            .container{
                width: 100% !important;
            }
        }
        .buttons-play{
            margin-top: 30vh;
        }
        .tf-section.wrap-category-box {
            padding-bottom: 50px;
            padding-top: 50px;
            overflow: hidden;
        }
        .tf-icon-box{
            background-color: #d2ebd5;
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
                                <a href="{{route('front.index')}}">Mamikook concept </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('front.canteen')}}">Creez votre cantine digitale</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('front.miamihome')}}">Mamikook à la maison</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('front.butre')}}">Epicerie au bureau</a>
                            </li>
                        </ul>
                    </nav><!-- /#main-nav -->
                </div>
            </div>
        </header>
        <!-- page-title -->
        <section class="page-title" style="height: 100vh">
            <div class="slider">
                <div class="img-bg2">
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
                                            <a href="https://www.youtube.com/watch?v={{$content->video}}" class="popup-youtube">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                        <div class="buttons-play">
                                            <a style="color: black" href="{{$content->apple}}">
                                                <button class="btn btn-outline-dark btn-icon-text">
                                                    <i class="fa fa-apple btn-icon-prepend mdi-36px"></i>
                                                    <span class="d-inline-block text-left">
                                                    <small class="font-weight-light d-block">Disponible sur le</small> App Store
                                                </span>
                                                </button>
                                            </a>
                                            <a style="color: black" href="{{$content->android}}">
                                                <button class="btn btn-outline-dark btn-icon-text">
                                                    <i class="fa fa-android btn-icon-prepend mdi-36px"></i>
                                                    <span class="d-inline-block text-left">
                                                    <small class="font-weight-light d-block">Obtenez-le sur le</small> Google Play
                                                </span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title -->
@yield('content')


    <!-- footer -->
        <footer id="footer" class="footer-style01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-link widget-footer">
                            <h4 class="widget-title">À propos de nous</h4>
                            <ul class="widget-list">
                                <li>{{$gs->footer}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget widget-link widget-footer">
                            <h4 class="widget-title">Nos applications</h4>
                            <div class="template-demo mt-2">
                                <a style="color: black" href="{{$content->apple}}">
                                    <button class="btn btn-outline-dark btn-icon-text">
                                        <i class="fa fa-apple btn-icon-prepend mdi-36px"></i>
                                        <span class="d-inline-block text-left">
                                        <small class="font-weight-light d-block">Disponible sur le</small> App Store
                                    </span>
                                    </button>
                                </a>
                                <a style="color: black" href="{{$content->android}}">
                                    <button class="btn btn-outline-dark btn-icon-text">
                                        <i class="fa fa-android btn-icon-prepend mdi-36px"></i>
                                        <span class="d-inline-block text-left">
                                        <small class="font-weight-light d-block">Obtenez-le sur le</small> Google Play
                                    </span>
                                    </button>
                                </a>
                            </div>
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

