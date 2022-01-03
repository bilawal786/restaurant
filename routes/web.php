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
Route::post('/company/submit', 'FrontendController@companySubmit')->name('company.submit');
Route::post('/contact/submit', 'FrontendController@contactSubmit')->name('contact.submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/general/settings', 'GeneralSettingsController@index')->name('generalsettings.index');
Route::post('/general/settings/store', 'GeneralSettingsController@store')->name('general.store');
Route::get('/website/content', 'GeneralSettingsController@content')->name('website.content');
Route::get('/admin/company/contacts', 'GeneralSettingsController@companycontacts')->name('admin.company.contacts');
Route::get('/admin/contacts', 'GeneralSettingsController@contacts')->name('admin.contacts');
Route::get('/admin/mamikkok', 'GeneralSettingsController@mamikkok')->name('admin.mamikkok');
Route::get('/admin/bureau', 'GeneralSettingsController@bureau')->name('admin.bureau');
Route::get('/admin/meals', 'GeneralSettingsController@meals')->name('admin.meals');
Route::get('/admin/delete/{id}', 'GeneralSettingsController@mealDelete')->name('meal.delete');
Route::post('/website/content/store', 'GeneralSettingsController@contentStore')->name('content.store');
Route::post('/meal/store', 'GeneralSettingsController@mealStore')->name('meal.store');
