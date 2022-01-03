@extends('layouts.front')
@section('content')
    <div class="container mt-5" id="canteen">
        <div class="row">
            <div class="col-md-12">
                <img style="width: 100%" src="{{asset('front/assets/img/logo/logo.png')}}" alt="">
                <br>
                <br>
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
@endsection
