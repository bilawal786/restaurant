<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/canteen', 'FrontendController@canteen')->name('front.canteen');
Route::get('/miamihome', 'FrontendController@miamihome')->name('front.miamihome');
Route::get('/butre', 'FrontendController@butre')->name('front.butre');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/general/settings', 'GeneralSettingsController@index')->name('generalsettings.index');
Route::post('/general/settings/store', 'GeneralSettingsController@store')->name('general.store');
Route::get('/website/content', 'GeneralSettingsController@content')->name('website.content');
Route::post('/website/content/store', 'GeneralSettingsController@contentStore')->name('content.store');
