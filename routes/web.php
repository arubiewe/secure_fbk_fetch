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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::post('/','retrieveController@submitrecord');

Route::get('/secure', function () {
    return view('pages.secure');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::post('secure','retrieveController@submitrecord');

Route::get('dashboard','FetchConroller@dashboard');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');