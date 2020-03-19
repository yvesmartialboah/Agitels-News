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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route dédiée au administrateurs connu sous le nom de membre (@membre @endmembre)

Route::middleware('membre')->group(function () {
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource ('interviews', 'InterviewController', [
	        //'except' => 'show'
	    ]);
	    Route::resource('publications', 'publicationController');
	    Route::resource('flash', 'FlashController');
	    Route::resource('auteurs', 'AuteurController');
    });
});