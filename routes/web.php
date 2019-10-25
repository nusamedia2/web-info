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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware('auth');

//Login Admin
Route::get('/login','AuthController@login')->name('login')->middleware('guest');
Route::get('/register','AuthController@register')->middleware('guest');
Route::post('register/post','AuthController@registerpost')->middleware('guest');
Route::post('/login/post', 'AuthController@loginpost')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('/tutorial-vpn', 'CommentTutorialVpnController@index');
Route::post('/tutorial-vpn/store', 'CommentTutorialVpnController@store');

Route::get('/cara-deposit-dan-withdraw', function () {
    return view('caradeposit');
});
Route::get('/cara-daftar', function () {
    return view('caradaftar');
});
Route::get('/refferal', function () {
    return view('refferal');
});
Route::get('/lupa-password', function () {
    return view('lupapassword');
});
Route::get('/prediksi', function () {
    return view('prediksi');
});

Route::get('/hongkong-dashboard', 'HongkongController@index');
Route::get('/hongkong-add', 'HongkongController@create');
Route::post('/hongkong/store', 'HongkongController@store');
Route::get('/hongkong', 'HongkongController@index2');
Route::get('/deletedatahongkong/{id}', 'HongkongController@destroy');

Route::get('/jakarta-dashboard', 'JakartaController@index');
Route::get('/jakarta-add', 'JakartaController@create');
Route::post('/jakarta/store', 'JakartaController@store');
Route::get('/jakarta', 'JakartaController@index2');
Route::get('/deletedatajakarta/{id}', 'JakartaController@destroy');

Route::get('/jowo-dashboard', 'JowoController@index');
Route::get('/jowo-add', 'JowoController@create');
Route::post('/jowo/store', 'JowoController@store');
Route::get('/jowo', 'JowoController@index2');
Route::get('/deletedatajowo/{id}', 'JowoController@destroy');

Route::get('/sgpmorning-dashboard', 'SgpmorningController@index');
Route::get('/sgpmorning-add', 'SgpmorningController@create');
Route::post('/sgpmorning/store', 'SgpmorningController@store');
Route::get('/sgpmorning', 'SgpmorningController@index2');
Route::get('/deletedatasgpmorning/{id}', 'SgpmorningController@destroy');

Route::get('/sihanouk-dashboard', 'SihanoukController@index');
Route::get('/sihanouk-add', 'SihanoukController@create');
Route::post('/sihanouk/store', 'SihanoukController@store');
Route::get('/sihanouk', 'SihanoukController@index2');
Route::get('/deletedatasihanouk/{id}', 'SihanoukController@destroy');

Route::get('/singapore-dashboard', 'SingaporeController@index');
Route::get('/singapore-add', 'SingaporeController@create');
Route::post('/singapore/store', 'SingaporeController@store');
Route::get('/singapore', 'SingaporeController@index2');
Route::get('/deletedatasingapore/{id}', 'SingaporeController@destroy');

Route::get('/sydney-dashboard', 'SydneyController@index');
Route::get('/sydney-add', 'SydneyController@create');
Route::post('/sydney/store', 'SydneyController@store');
Route::get('/sydney', 'SydneyController@index2');
Route::get('/deletedatasydney/{id}', 'SydneyController@destroy');

Route::get('/toto-macau-dashboard', 'TotoMacauController@index');
Route::get('/toto-macau-add', 'TotoMacauController@create');
Route::post('/toto-macau/store', 'TotoMacauController@store');
Route::get('/toto-macau', 'TotoMacauController@index2');
Route::get('/deletedatatotomacau/{id}', 'TotoMacauController@destroy');
