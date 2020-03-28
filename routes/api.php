<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Auteur
// Route::resource('auteur', 'AuteurController');

// Publication
// Route::resource('publication', 'publicationController');

// Interview
// Route::resource('interview', 'InterviewController');

// Newsletter
Route::post('/Newsletter', 'newsletterController@store');