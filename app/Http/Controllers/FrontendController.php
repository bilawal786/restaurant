<?php

namespace App\Http\Controllers;

use App\CompantContacts;
use App\Contact;
use App\Content;
use App\GeneralSettings;
use App\Pdf;
use Illuminate\Http\Request;
use Session;
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
       $pdf = Pdf::all();
       return view('front.miamihome', compact('content', 'gs', 'pdf'));
   }
   public function mealView($id){
       $meal = Pdf::find($id);
       return view('front.mealView', compact('meal'));
   }
   public function butre(){
       $gs = GeneralSettings::find(1);
       $content = Content::find(1);
       return view('front.butre', compact('content', 'gs'));
   }
   public function companySubmit(Request $request){
       $company = new CompantContacts();
       $company->company_name = $request->company_name;
       $company->company_address = $request->company_address;
       $company->email = $request->email;
       $company->contact_name = $request->contact_name;
       $company->employes = $request->employes;
       $company->phone = $request->phone;
       $company->save();
       Session::flash('message', 'Vos coordonnées ont été soumises avec succès');
       return redirect()->back();
   }
   public function contactSubmit(Request $request){
       $company = new Contact();
       $company->address = $request->address;
       $company->mail = $request->mail;
       $company->city = $request->city;
       $company->save();
       Session::flash('message', 'Vos coordonnées ont été soumises avec succès');
       return redirect()->back();
   }
}
