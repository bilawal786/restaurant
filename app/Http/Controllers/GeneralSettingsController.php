<?php

namespace App\Http\Controllers;

use App\Content;
use App\GeneralSettings;
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
        if ($request->hasfile('image_2')) {
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
        }
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
        $content->video = $request->video;
        $content->d_1 = $request->d_1;
        $content->d_2 = $request->d_2;
        $content->d_3 = $request->d_3;
        $content->d_4 = $request->d_4;
        $content->d_5 = $request->d_5;
        $content->d_6 = $request->d_6;
        $content->d_7 = $request->d_7;

        $content->h_3 = $request->h_3;
        $content->h_4 = $request->h_4;
        $content->h_5 = $request->h_5;
        $content->h_6 = $request->h_6;
        $content->h_7 = $request->h_7;
        $content->update();
        $notification = array(
            'messege' => 'Ajouté avec succès!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
