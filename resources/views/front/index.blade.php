@extends('layouts.front')
@section('content')
        <!-- best category -->
        <section class="tf-section wrap-category" style="padding-bottom: 0px; padding-top: 0px">
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

<!--            <div class="container mt-5 text-center">
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
            </div>-->
<!--            <div class="container">
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
            </div>-->
        </section>
        <!-- best category -->


@endsection
