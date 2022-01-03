@extends('layouts.front')
@section('content')
    <div class="container mt-5" id="canteen">
        <div class="row">
            <div class="col-md-12">
                <img style="width: 100%" src="{{asset('front/assets/img/logo/logo.png')}}" alt="">
                <br>
                <br>
                <div class="form-contact color-bg-style4" style="margin-left: 0px">
                    <h4  style="overflow-wrap: break-word" class="heading"><b>Vous souhaitez mettre en place une cantine digitale
                            dans votre entreprise :</b></h4>
                    <div class="text">Remplissezceformulaire:</div>
                    @if(Session::has('message'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong style="color: black">{{ Session::get('message') }}!</strong>
                        </div>
                    @endif
                    <form action="{{route('company.submit')}}" method="post"  class="comment-form comment-form-style2 style2">
                        @csrf
                        <fieldset>
                            <input type="text" id="name" placeholder="Nom de l'entreprise"  name="company_name" required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Adresse de l'entreprise"  name="company_address"  required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Adresse mail professionnelle"  name="email" required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Nom du contact au sein de l'entreprise"  name="contact_name" required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Nombre de salariés dans l'entreprise"  name="employes" required>
                        </fieldset>
                        <fieldset>
                            <input type="text" placeholder="Numéro de téléphone"  name="phone" required>
                        </fieldset>
                        <div class="btn-submit flat-button flat-button-style2">
                            <button  name="submit" class="tf-button color-style color-style1" type="submit">
                                Envoyer
                            </button>
                        </div>
{{--                        <br>--}}
{{--                        <h4 class="heading"><b>Solution De Restauration Déjà En Place:</b></h4>--}}
{{--                        <h4 class="heading">Cantine d'entreprise</h4>--}}
{{--                        <h4 class="heading">Titres restaurants</h4>--}}
{{--                        <h4 class="heading">Aucun des deux</h4>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
