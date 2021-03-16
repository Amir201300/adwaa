<?php

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


Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale(),

    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {


});

Route::get('/', function () {
    return view('home');
});
/** General pages */
Route::get('/media', 'GeneralController@media')->name('General.media');
Route::get('/volunteer', 'GeneralController@volunteer')->name('General.volunteer');

