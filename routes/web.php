<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace'=>'frontend'],function () {
    Route::get('/','HomeController@index')->name('home');
    Route::resource('about-us', 'aboutUsController');
    Route::resource('marketing-tool','MarketingToolController');
    Route::resource('faq','FaqController');
    Route::resource('blogs', 'BlogController');
    Route::resource('contact', 'ContactController');
});


Auth::routes();

Route::get('pages-login', 'VeltrixController@index');
Route::get('pages-login-2', 'VeltrixController@index');
Route::get('pages-register', 'VeltrixController@index');
Route::get('pages-register-2', 'VeltrixController@index');
Route::get('pages-recoverpw', 'VeltrixController@index');
Route::get('pages-recoverpw-2', 'VeltrixController@index');
Route::get('pages-lock-screen', 'VeltrixController@index');
Route::get('pages-lock-screen-2', 'VeltrixController@index');
Route::get('pages-404', 'VeltrixController@index');
Route::get('pages-500', 'VeltrixController@index');
Route::get('pages-maintenance', 'VeltrixController@index');
Route::get('pages-comingsoon', 'VeltrixController@index');


Route::get('{any}', 'HomeController@index');

Route::get('index/{locale}', 'LocaleController@lang');
