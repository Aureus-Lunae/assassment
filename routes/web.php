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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/reviews', 'reviewController@index');
Route::post('/reviews', 'reviewController@store');
Route::get('/reviews/create', 'reviewController@create');

/* Quiz Routes */
Route::get('/quiz', 'generalController@quizStep1');
Route::post('/quiz', 'generalController@postQuizStep1');
Route::get('/quizStep2', 'generalController@quizStep2');
Route::post('/quizStep2', 'generalController@postQuizStep2');
Route::get('/quizStep3', 'generalController@quizStep3');
Route::post('/quizStep3', 'generalController@postQuizStep3');
Route::get('/quizResult', 'generalController@results')->middleware('auth');

