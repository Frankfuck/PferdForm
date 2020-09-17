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
Route::get('/politica', function () {
    return view('politica');
});

Route::get('/mail','SendEmailController@mailindex')->name('dynamic_email_template');

Route::get('/mail_armo','SendEmailController_armo@mailindex')->name('dynamic_email_template1');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sendemail','SendEmailController@index');

Route::get('/parceiroarmo','ArmoController@index');

Route::get('/cadcert','CadCertController@index');

Route::get('/sendemail/send','SendEmailController@send');

Route::get('/cadcert/store','CadCertController@store');

Route::get('/sendparceiroarmo/send','SendEmailController_armo@send');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});

