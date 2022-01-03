@extends('layouts.front')
@section('content')
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
    <div class="container" style="background-color: #202123; padding: 50px">
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
@endsection
