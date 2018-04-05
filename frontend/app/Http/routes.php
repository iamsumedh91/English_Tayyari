<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/daily-tips', 'HomeController@dailytips');
Route::get('daily-tips/{day}', 'HomeController@dailytips');
Route::get('dailyphrases', 'HomeController@dailyphrases');
Route::get('dailyphrases/{day}', 'HomeController@dailyphrases');
Route::get('dailywords', 'HomeController@dailywords');
Route::get('dailywords/{day}', 'HomeController@dailywords');
Route::get('/english-for-exam', 'HomeController@englishexam');
Route::get('/english-for-learning', 'LearningController@index');
Route::get('/english-for-learning/{category}', 'LearningController@lessonnumbers');
Route::get('/english-for-learning/{category}/{lesson_number}', 'LearningController@lesson');
Route::get('/test', 'TestController@index');
Route::get('/test/{category}', 'TestController@subcategory');
Route::get('/test/{category}/{subcategory}', 'TestController@testquestions');
Route::get('/practice', 'PracticeController@index');
Route::get('/practice/{category}', 'PracticeController@subcategory');
Route::get('/practice/{category}/{subcategory}', 'PracticeController@practicequestions');


