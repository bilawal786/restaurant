<?php

use App\GeneralSettings;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'MAMIKOOK',
            'phone'     => '00000000',
            'role'     => '1',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        GeneralSettings::create([
            'sitename'     => 'Mamikook',
            'address'     => 'Magasin de Basse-Terre',
            'phone'     => '0590 310 035',
            'email'     => 'admin@gmail.com',
            'logo'     => 'front/assets/img/logo/logo.png',
            'footer'    => 'l y a 2 responsables de Magasin (Grand-Camps et Basse-Terre). Maroquinerie (Sacs, chaussures, accessoires), 100% Cuir, fait main. Ce sont des séries limitées.',
            'facebook'    => 'https://facebook.com/',
            'instagram'    => 'https://www.instagram.com/',
            'android'    => '#',
            'apple'    => '#',
        ]);
        \App\Content::create([
            'header_image' => 'front/img_bg_slider_home01.jpg',
            'video' => 'ySd-XWQWhbI',
            'title_1' => 'choisissez votre meilleure catégorie',

            'image_1' => 'front/a.PNG',
            'image_2' => 'front/b.PNG',
            'image_3' => 'front/c.PNG',
            'image_4' => 'front/d.PNG',

            'image_5' => 'front/img.png',
            'image_6' => 'front/img_1.png',
            'image_7' => 'front/img_2.png',
            'image_8' => 'front/img_3.png',
            'image_9' => 'front/assets/img/logo/logo.png',
            'image_10' => 'front/img_10.png',
            'image_11' => 'front/logo.jpeg',

            'image_12' => 'front/img_6.png',
            'image_13' => 'front/11.PNG',
            'image_14' => 'front/22.PNG',
            'image_15' => 'front/33.PNG',
            'image_16' => 'front/44.PNG',
            'image_17' => 'front/img_7.png',
            'image_18' => 'front/img_8.png',
            'image_19' => 'front/img_9.png',

            'd_1' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><font style="font-size: 24px; font-style: inherit; vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></font></font></font></h1><h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">La pause déj devient un régal</span></h1><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Installez une cantine dentreprise na jamais été aussi simple. Vous navez rien à faire, on soccupe de tout.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Mise en place en 48h</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Sans engagement</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Accompagnement</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Gestion simplifiée</b></li></ol>',
            'd_2' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Flexibilité et autonomie</span></h1><ol><li><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;"><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Car nous connaissons limportance de vos collaborateurs, MamiKook sadapte à vos besoins en vous proposant une solution sur mesure.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livraison quotidienne</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Espace personnalisé</span></li></ol></span></li></ol>',
            'd_3' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Une cantine connectée qui convient à tout le monde</span></h1><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Rendez vos collaborateurs heureux! Un plaisir à portée de main car les commandes se font sur lapplication.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Plats cuisinés et variés</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Commande en ligne sur lapplication Mamikook</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livraison offerte</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Carte renouvelée chaque semaine</span></li></ol>',
            'd_4' => '<div><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 700;">Une cantine humaine et engagée</span></div><div><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 24px;">Une équipe engagée sur des thèmes qui nous tiennent à cœur.</span></div><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Produits locaux</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Packaging écologique</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Cuisiniers expérimentés</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livreurs en CDI</span></li></ol>',

            'd_5' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Vos courses de la semaine au prix du supermarché livré au bureau.</span></h1><h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Pas le temps de faire vos courses pour ce soir?</span></h1><h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Mamikook pourrait bien vous sauver la mise !</span></h1><h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Le pionnier en Guadeloupe de la livraison de plats préparés pour le déjeuner va proposer ses services très bientôt.</span></h1>',
            'd_6' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Vos repas fraîchement cuisinés, livrés pour la semaine.</span></h1><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">✓ Cuisinés maison par nos chef fes</h3><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">✓ Livraison gratuite partout en France</h3><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">✓ Paiement possible par carte titres-restaurant</h3><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">✓ Sans aucun engagement</h3>',
            'd_7' => '<h3><b>Choisissez vos plats</b></h3><div><b>Varies et equilibres</b></div>',
           'd_8' => '<h3><b>On cuisine et on vous livre</b></h3><div><b>Une fois par semaine</b></div>',
           'd_9' => '<h3><b>Recevez votre box</b></h3><div><b>cest pret en 2 minutes</b></div>',
           'd_10' => '<h3><b>Modifiez ou arretez</b></h3><div><b>sans management</b></div>',
            'd_11' => 'Comment ça marche ?',
            'd_12' => 'Mieux manager, sans y penser',
            'd_13' => '<h3 style="text-align: center; "><b>FINI LE SURGELÉ, MANGEZ FRAIS !</b>
</h3><h5 style="text-align: center; ">Nos plats sont cuisinés maison, comme si vous laviez fait mais déjà prêts pour vous simplifier la vie.</h5>',
            'd_14' => '<h3 style="text-align: center; "><b>A LA MAISON OU AU BUREAU</b>
</h3><h5 style="text-align: center; ">Recevez votre commande pour la semaine en camion réfrigéré.</h5>',
            'd_15' => '<h3 style="text-align: center; "><b>SEAZON SADAPTE A VOUS</b></h3><h5 style="text-align: center; ">
Des vacances, un imprevu ? Faites une pous ou arretez quand vous voulez</h5>',
        ]);
    }
}
