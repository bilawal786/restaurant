@extends('layouts.front')
@section('content')
    <div class="container" id="miamihome">
        <div class="row">
            <div class="col-md-6">
               {!! $content->d_6 !!}
            </div>
            <div class="col-md-6">
                <img style="width: 100%" src="{{asset($content->image_12)}}" alt="">
            </div>
        </div>
    </div>
    <section class="tf-section wrap-category-box" style="background-color: #d2ebd5">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1><b>{{$content->d_11}}</b></h1>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="tf-icon-box tf-icon-box-style02 padding-right61  wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                        <div class="icon-wrap margin-bt-18">
                            <img  src="{{asset($content->image_13)}}" alt="images">
                        </div>
                        {!! $content->d_7 !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tf-icon-box tf-icon-box-style02 padding-right19 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                        <div class="icon-wrap margin-bt-18">
                            <img src="{{asset($content->image_14)}}" alt="images">
                        </div>
                        {!! $content->d_8 !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tf-icon-box tf-icon-box-style02 padding-left21 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                        <div class="icon-wrap margin-bt-18">
                            <img src="{{asset($content->image_15)}}" alt="images">
                        </div>
                        {!! $content->d_9 !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tf-icon-box tf-icon-box-style02 padding-left62 wow fadeInUp  animated" data-wow-delay="0.3ms" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.3ms; animation-name: fadeInUp;">
                        <div class="icon-wrap margin-bt-18">
                            <img src="{{asset($content->image_16)}}" alt="images">
                        </div>
                        {!! $content->d_10 !!}
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
                <h1><b>{{$content->d_12}}</b></h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container carousel-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset($content->image_17)}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                           {!! $content->d_13 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset($content->image_18)}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                            {!! $content->d_14 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="swiper-slide">
                                <div class="slider-item ">
                                    <div class="post wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1500ms">
                                        <div class="featured-post">
                                            <img src="{{asset($content->image_19)}}" alt="images">
                                        </div>
                                        <div class="content-post bg-blog text-center">
                                            {!! $content->d_15 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12" >
                <div class="swiper-container carousel-4" style="background-color: #202123; padding: 50px; border-radius: 20px;">
                    <div class="swiper-wrapper" >
                        @foreach($pdf as $pd)
                        <div class="swiper-slide" style="background-color: #3b4043; border-radius: 10px; display: inline-block" >
                            <div class="slider-item">
                                <a style="width: 100%; display: inline-block;overflow-wrap: break-word; color: white; padding: 10px" href="{{route('meal.view', ['id' => $pd->id])}}">
                                    <img src="{{asset($pd->pdf)}}" style="width: 100%" alt="">
                                </a>
                            </div><!-- item-->
                        </div>
                        @endforeach
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
                    <div class="text">Soyez informé quand il sera disponible:</div>
                    @if(Session::has('message'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong style="color: black">{{ Session::get('message') }}!</strong>
                        </div>
                    @endif
                    <form action="{{route('contact.submit')}}" method="post"  class="comment-form comment-form-style2 style2">
                        @csrf
                        <fieldset>
                            <input type="text" id="name" placeholder="Adresse" class="tb-my-input" name="address" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset>
                            <input type="text" id="email" placeholder="Mail" class="tb-my-input" name="mail" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset>
                            <input type="text" id="email" placeholder="Ville de livraison" class="tb-my-input" name="city" tabindex="2" value="" aria-required="true" required="">
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
