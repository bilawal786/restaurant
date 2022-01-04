<?php

namespace App\Http\Controllers;

use App\CompantContacts;
use App\Contact;
use App\Content;
use App\GeneralSettings;
use App\Pdf;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function index(){
        $gs = GeneralSettings::find(1);
        return view('admin.generalsettings.index', compact('gs'));
    }
    public function store(Request $request){
        $gs = GeneralSettings::find(1);
        $gs->sitename = $request->sitename;
        $gs->address = $request->address;
        $gs->phone = $request->phone;
        $gs->email = $request->email;
        $gs->footer = $request->footer;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        $gs->apple = $request->apple;
        $gs->android = $request->android;

        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'logo/' . $name;
        }
        $gs->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function content(){
        $content = Content::find(1);
        return view('admin.generalsettings.content', compact('content'));
    }
    public function mamikkok(){
        $content = Content::find(1);
        return view('admin.generalsettings.mamikkok', compact('content'));
    }
    public function bureau(){
        $content = Content::find(1);
        return view('admin.generalsettings.bureau', compact('content'));
    }
    public function contentStore(Request $request){
        $content = Content::find(1);
        if ($request->hasfile('header_image')) {
            $image1 = $request->file('header_image');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->header_image = 'logo/' . $name;
        }
          if ($request->hasfile('image_1')) {
                    $image1 = $request->file('image_1');
                    $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
                    $destinationPath = 'logo/';
                    $image1->move($destinationPath, $name);
                    $content->image_1 = 'logo/' . $name;
                }
        /*       if ($request->hasfile('image_2')) {
             $image1 = $request->file('image_2');
             $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
             $destinationPath = 'logo/';
             $image1->move($destinationPath, $name);
             $content->image_2 = 'logo/' . $name;
         }
         if ($request->hasfile('image_3')) {
             $image1 = $request->file('image_3');
             $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
             $destinationPath = 'logo/';
             $image1->move($destinationPath, $name);
             $content->image_3 = 'logo/' . $name;
         }
         if ($request->hasfile('image_4')) {
             $image1 = $request->file('image_4');
             $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
             $destinationPath = 'logo/';
             $image1->move($destinationPath, $name);
             $content->image_4 = 'logo/' . $name;
         }*/
        if ($request->hasfile('image_5')) {
            $image1 = $request->file('image_5');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_5 = 'logo/' . $name;
        }
        if ($request->hasfile('image_6')) {
            $image1 = $request->file('image_6');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_6 = 'logo/' . $name;
        }
        if ($request->hasfile('image_7')) {
            $image1 = $request->file('image_7');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_7 = 'logo/' . $name;
        }
        if ($request->hasfile('image_8')) {
            $image1 = $request->file('image_8');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_8 = 'logo/' . $name;
        }
        if ($request->hasfile('image_9')) {
            $image1 = $request->file('image_9');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_9 = 'logo/' . $name;
        }
        if ($request->hasfile('image_10')) {
            $image1 = $request->file('image_10');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_10 = 'logo/' . $name;
        }
        if ($request->hasfile('image_12')) {
            $image1 = $request->file('image_12');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_12 = 'logo/' . $name;
        }
        if ($request->hasfile('image_13')) {
            $image1 = $request->file('image_13');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_13 = 'logo/' . $name;
        }
        if ($request->hasfile('image_14')) {
            $image1 = $request->file('image_14');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_14 = 'logo/' . $name;
        }
        if ($request->hasfile('image_15')) {
            $image1 = $request->file('image_15');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_15 = 'logo/' . $name;
        }
        if ($request->hasfile('image_16')) {
            $image1 = $request->file('image_16');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_16 = 'logo/' . $name;
        }
        if ($request->hasfile('image_17')) {
            $image1 = $request->file('image_17');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_17 = 'logo/' . $name;
        }
        if ($request->hasfile('image_18')) {
            $image1 = $request->file('image_18');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_18 = 'logo/' . $name;
        }
        if ($request->hasfile('image_19')) {
            $image1 = $request->file('image_19');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $content->image_19 = 'logo/' . $name;
        }
        if ($request->video){
            $content->video = $request->video;
        }
        if ($request->d_1){
            $content->d_1 = $request->d_1;
        }
       if ($request->d_2){
           $content->d_2 = $request->d_2;
       }
        if ($request->d_3){
            $content->d_3 = $request->d_3;
        }
        if ($request->d_4){
            $content->d_4 = $request->d_4;
        }
       if ( $request->d_5){
           $content->d_5 = $request->d_5;
       }
       if ( $request->d_6){
           $content->d_6 = $request->d_6;
       }
       if ( $request->d_7){
           $content->d_7 = $request->d_7;
       }
       if ( $request->d_8){
           $content->d_8 = $request->d_8;
       }
       if ( $request->d_9){
           $content->d_9 = $request->d_9;
       }
       if ( $request->d_10){
           $content->d_10 = $request->d_10;
       }
       if ( $request->d_11){
           $content->d_11 = $request->d_11;
       }
       if ( $request->d_12){
           $content->d_12 = $request->d_12;
       }
       if ( $request->d_13){
           $content->d_13 = $request->d_13;
       }
       if ( $request->d_14){
           $content->d_14 = $request->d_14;
       }
       if ( $request->d_15){
           $content->d_15 = $request->d_15;
       }

        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function companycontacts(){
        $companycontacts = CompantContacts::all();
        return view('admin.companycontacts', compact('companycontacts'));
    }
    public function contacts(){
        $companycontacts = Contact::all();
        return view('admin.contacts', compact('companycontacts'));
    }
    public function meals(){
        $meals = Pdf::all();
        return view('admin.meals', compact('meals'));
    }
    public function mealStore(Request $request){
        $meal = new Pdf();
        $meal->title = $request->title;
        if ($request->hasfile('pdf')) {
            $image1 = $request->file('pdf');
            $name = time() . 'pdf' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'pdf/';
            $image1->move($destinationPath, $name);
            $meal->pdf = 'pdf/' . $name;
        }
        $meal->save();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function mealDelete($id){
        $meal = Pdf::find($id);
        $meal->delete();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
