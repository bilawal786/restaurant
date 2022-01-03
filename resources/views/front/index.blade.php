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
        @media only screen and (max-width: 600px) {
           .p-100{
               padding: 0px;
           }
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
                                <a href="#concept">Mamikook concept </a>
                            </li>
                            <li class="menu-item">
                                <a href="#canteen">Creez votre cantine digitale</a>
                            </li>
                            <li class="menu-item">
                                <a href="#miamihome">Mamikook à la maison</a>
                            </li>
                            <li class="menu-item">
                                <a href="#butre">Epicerie au bureau</a>
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
                                            <a href="https://www.youtube.com/watch?v={{$content->video}}" class="popup-youtube">
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
        <section class="tf-section wrap-category" style="padding-bottom: 0px">
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
            <div class="container" id="concept">
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
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-size: 30px"><b>M A M I K O O K</b> est votre solution de restauration en entreprise gourmande et engagée. Notre offre de restauration en entreprise est flexible, modulaire et éco-responsable. Mamikook propose la livraison de repas dans un espace dédié au sein de votre entreprise. Plus besoin de quitter le bureau, de réserver des plats en amont au téléphone ou de prévoir la gamelle du lendemain. Avec l'application Mamikook, vous commandez et payez directement via votre smartphone des plats cuisinés variés.</h1>
                    </div>
                    <br>
                </div>
                <button class="button">LA PAUSE DÉJEUNE DEVIENT UN PLAISIR!
                </button>
            </div>
            <br>
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
            <div class="container mt-5" id="canteen">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-contact color-bg-style4" style="margin-left: 0px">
                            <h4 class="heading"><b>Voussouhaitezmettreenplaceunecantinedigitale
                                    dansvotreentreprise :</b></h4>
                            <div class="text">Remplissezceformulaire:</div>
                            <form action="" method="post"  class="comment-form comment-form-style2 style2" novalidate="novalidate">
                                <fieldset>
                                    <input type="text" id="name" placeholder="Nom de l'entreprise" class="tb-my-input" name="name" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset>
                                    <input type="text" id="email" placeholder="Adresse de l'entreprise" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset>
                                    <input type="text" id="email" placeholder="Adresse mail professionnelle" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset>
                                    <input type="text" id="email" placeholder="Nom du contact au sein de l'entreprise" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset>
                                    <input type="text" id="email" placeholder="Nombre de salariés dans l'entreprise" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <fieldset>
                                    <input type="text" id="email" placeholder="Numéro de téléphone" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="btn-submit flat-button flat-button-style2">
                                    <button  name="submit" class="tf-button color-style color-style1" type="submit">
                                        Envoyer
                                    </button>
                                </div>
                                <br>
                                <h4 class="heading"><b>Solution De Restauration Déjà En Place:</b></h4>
                                <h4 class="heading">Cantine d'entreprise</h4>
                                <h4 class="heading">Titres restaurants</h4>
                                <h4 class="heading">Aucun des deux</h4>
                            </form>
                        </div>
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
                <div class="row text-center p-100">
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
        <div class="container" id="miamihome">
            <div class="row">
                <div class="col-md-6">
                   <h1><b>Vos repas fraîchement cuisinés, livrés pour la semaine.</b></h1>

                    <h3>✓ Cuisinés maison par nos chef fes</h3>

                    <h3>✓ Livraison gratuite partout en France</h3>

                    <h3>✓ Paiement possible par carte titres-restaurant</h3>

                    <h3>✓ Sans aucun engagement</h3>
                </div>
                <div class="col-md-6">
                    <img style="width: 100%" src="{{asset('front/img_6.png')}}" alt="">
                </div>
            </div>
        </div>
        <section class="tf-section wrap-category-box" style="background-color: #d2ebd5">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1><b>Comment ça  marche ?</b></h1>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="tf-icon-box tf-icon-box-style02 padding-right61  wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                            <div class="icon-wrap margin-bt-18">
                                <img  src="{{asset('front/11.PNG')}}" alt="images">
                            </div>
                            <h5 class="heading">
                              <a href="#">  <b>Choisissez vos plats</b></a>
                            </h5>
                            <p class="sub-heading">
                               Varies et equilibres
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tf-icon-box tf-icon-box-style02 padding-right19 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                            <div class="icon-wrap margin-bt-18">
                                <img src="{{asset('front/22.PNG')}}" alt="images">
                            </div>
                            <h5 class="heading">
                                <a href="#"><b>On cuisine et on vous livre</b> </a>
                            </h5>
                            <p class="sub-heading">
                               Une fois par semaine
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tf-icon-box tf-icon-box-style02 padding-left21 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                            <div class="icon-wrap margin-bt-18">
                                <img src="{{asset('front/33.PNG')}}" alt="images">
                            </div>
                            <h5 class="heading">
                                <a href="#"><b>Recevez votre box</b></a>
                            </h5>
                            <p class="sub-heading">
                                cest pret en 2 minutes
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tf-icon-box tf-icon-box-style02 padding-left62 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                            <div class="icon-wrap margin-bt-18">
                                <img src="{{asset('front/44.PNG')}}" alt="images">
                            </div>
                            <h5 class="heading">
                                <a href="#"><b>Modifiez  ou arretez</b></a>
                            </h5>
                            <p class="sub-heading">
                               sans management
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1><b>Mieux manager, sans y penser</b></h1>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container carousel-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset('front/img_7.png')}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                            <h3>
                                                <b>FINI LE SURGELÉ, MANGEZ FRAIS !</b>
                                            </h3>
                                            <p>Nos plats sont cuisinés maison, comme si vous l'aviez fait mais déjà prêts pour vous simplifier la vie.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset('front/img_8.png')}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                            <h3>
                                                <b>A LA MAISON OU AU BUREAU
                                                </b>
                                            </h3>
                                            <p>Recevez votre commande pour la semaine en camion réfrigéré.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset('front/img_9.png')}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                            <h3>
                                                <b>SEAZON SADAPTE A VOUS</b>
                                            </h3>
                                            <p>Des vacances, un imprevu ? Faites une pous ou arretez quand vous voulez</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: #202123; padding: 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container carousel-4">
                        <div class="swiper-wrapper" >
                            <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                                <div class="slider-item img-brand">
                                    <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="#">
                                       <h3><b>Courgette</b></h3>
                                       <p><b>Voir le PDF</b></p>
                                    </a>
                                </div><!-- item-->
                            </div>
                            <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                                <div class="slider-item img-brand">
                                    <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="#">
                                       <h3><b>Courgette</b></h3>
                                       <p><b>Voir le PDF</b></p>
                                    </a>
                                </div><!-- item-->
                            </div>
                            <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                                <div class="slider-item img-brand">
                                    <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="#">
                                       <h3><b>Courgette</b></h3>
                                       <p><b>Voir le PDF</b></p>
                                    </a>
                                </div><!-- item-->
                            </div>
                            <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                                <div class="slider-item img-brand">
                                    <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="#">
                                       <h3><b>Courgette</b></h3>
                                       <p><b>Voir le PDF</b></p>
                                    </a>
                                </div><!-- item-->
                            </div>
                            <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                                <div class="slider-item img-brand">
                                    <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="#">
                                       <h3><b>Courgette</b></h3>
                                       <p><b>Voir le PDF</b></p>
                                    </a>
                                </div><!-- item-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-contact color-bg-style4" style="margin-left: 0px">
                        <h4 class="heading"><b>Le service vous interesse ?</b></h4>
                        <div class="text">Soyez informe quand il sera disponible:</div>
                        <form action="" method="post"  class="comment-form comment-form-style2 style2" novalidate="novalidate">
                            <fieldset>
                                <input type="text" id="name" placeholder="Adresse" class="tb-my-input" name="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset>
                                <input type="text" id="email" placeholder="Mail" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset>
                                <input type="text" id="email" placeholder="Ville de livraison" class="tb-my-input" name="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="btn-submit flat-button flat-button-style2">
                                <button  name="submit" class="tf-button color-style color-style1" type="submit">
                                    Envoyer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5" id="butre">
            <div class="row">
                <div class="col-md-12">
                    <h1><b>Vos courses de la semaine au prix du supermarché livré au bureau.</b></h1>
                    <h1><b>Pas le temps de faire vos courses pour ce soir?</b></h1>
                    <h1><b>Mamikook pourrait bien vous sauver la mise !</b></h1>
                    <h1><b>Le pionnier en Guadeloupe de la livraison de plats préparés pour le déjeuner va proposer ses services très bientôt.</b></h1>
                    <img style="width: 100%" src="{{asset('front/img_10.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer id="footer" class="footer-style01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget widget-link widget-footer">
                            <h4 class="widget-title">À propos de nous</h4>
                            <ul class="widget-list">
                                <li>{{$gs->footer}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 no-pd-left">
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

