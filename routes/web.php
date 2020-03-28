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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route d'authentification
Auth::routes();

// Page de Profil de l'utilisateur
Route::get('/home', 'HomeController@index')->name('home');

// Page d'acceuil
Route::get('/', 'internauteController@accueil')->name('accueil');

// Publications
Route::get('/article/{id}/detail', 'internauteController@view_article')->name('view_article');
Route::get('/articles', 'internauteController@list_articles')->name('list_articles');

// Interviews
Route::get('/interview/{id}/detail', 'internauteController@view_interview')->name('view_interview');
Route::get('/interview', 'internauteController@list_interview')->name('list_interview');

// Search
Route::get('/search', 'internauteController@search')->name('search');

// Contact
Route::get('/contact', 'internauteController@contact')->name('contact');

// Route dédiée au administrateurs connu sous le nom de membre (@membre @endmembre)

Route::middleware('membre')->group(function () {
	Route::group(['prefix' => 'admin'], function () {
	    Route::resource ('interviews', 'InterviewController', [
	        //'except' => 'show'
	    ]);
	    Route::resource('publications', 'publicationController');
	    Route::resource('flash', 'FlashController');
	    Route::resource('auteurs', 'AuteurController');
	    Route::resource('news', 'newsletterController');
	    // Envoie de mail à plusieurs
		Route::post('/all', 'newsletterController@all')->name('all');
		// Liste des messages envoyés au abonnés
		Route::get('/list_messages', 'newsletterController@list_messages')->name('list_messages');
    });
});