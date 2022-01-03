<?php

namespace App\Http\Controllers;

use App\Content;
use App\GeneralSettings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
       $gs = GeneralSettings::find(1);
       $content = Content::find(1);
       return view('front.index', compact('content', 'gs'));
   }
   public function canteen(){
       $gs = GeneralSettings::find(1);
       $content = Content::find(1);
       return view('front.canteen', compact('content', 'gs'));
   }
   public function miamihome(){
       $gs = GeneralSettings::find(1);
       $content = Content::find(1);
       return view('front.miamihome', compact('content', 'gs'));
   }
   public function butre(){
       $gs = GeneralSettings::find(1);
       $content = Content::find(1);
       return view('front.butre', compact('content', 'gs'));
   }
}
