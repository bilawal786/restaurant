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
            'image_9' => 'front/img_4.png',
            'image_10' => 'front/img_5.png',
            'image_11' => 'front/logo.jpeg',

            'd_1' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><font style="font-size: 24px; font-style: inherit; vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></font></font></font></h1><h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">La pause déj devient un régal</span></h1><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Installez une cantine dentreprise na jamais été aussi simple. Vous navez rien à faire, on soccupe de tout.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Mise en place en 48h</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Sans engagement</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Accompagnement</b></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><b>Gestion simplifiée</b></li></ol>',
            'd_2' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Flexibilité et autonomie</span></h1><ol><li><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;"><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Car nous connaissons limportance de vos collaborateurs, MamiKook sadapte à vos besoins en vous proposant une solution sur mesure.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livraison quotidienne</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Espace personnalisé</span></li></ol></span></li></ol>',
            'd_3' => '<h1 style="font-size: 36px; margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Une cantine connectée qui convient à tout le monde</span></h1><h3 style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;">Rendez vos collaborateurs heureux! Un plaisir à portée de main car les commandes se font sur lapplication.</h3><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Plats cuisinés et variés</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Commande en ligne sur lapplication Mamikook</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livraison offerte</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Carte renouvelée chaque semaine</span></li></ol>',
            'd_4' => '<div><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 700;">Une cantine humaine et engagée</span></div><div><span style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 24px;">Une équipe engagée sur des thèmes qui nous tiennent à cœur.</span></div><ol><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Produits locaux</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Packaging écologique</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Cuisiniers expérimentés</span></li><li style="margin: 20px 0px 10px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-rendering: optimizelegibility;"><span style="font-weight: 700; font-family: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-style: inherit;">Livreurs en CDI</span></li></ol>',

            'd_5' => 'Pour votre entreprise : zéro engagement et la possibilité de mettre en place une prise en charge employeur.
                            Pour vos équipes : aucune attente et la possibilité de régler leurs commandes via lapplication ou en titres restaurants.',
            'd_6' => 'Une cuisine maison, équilibrée et diversifiée avec des produits de qualité.
                            Une solution écologique grâce à une livraison groupée à laide de sacs réutilisables.',
            'd_7' => ' Ils ont le choix parmi des salades, sandwichs, plats et desserts
                            chaque jour. Ils bénéficient dun service pratique sans aucune attente, de tarifs accessibles avec des plats dès 9,90€ et une livraison gratuite.',

            'h_1' => 'BIEN ÊTRE AU TRAVAIL',
            'h_2' => 'CANTINE DIGITALE',
            'h_3' => 'Livraison de repas en entreprise et sans engagement !',
            'h_4' => 'Une cantine meilleure pour la santé et meilleure pour la planète.',
            'h_5' => 'Vos collaborateurs ne pourront plus sen passer !',
            'h_6' => 'La solution astucieuse pour manger varié au bureau.',
            'h_7' => 'NE VOUS SOUCIEZ PLUS DE LA PAUSE DÉJEUNER. VOUS ETES LIVRÉ AU BUREAU AVANT MIDI! QUE DEMANDER DE PLUS ?!',
        ]);
    }
}
