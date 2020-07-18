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

Route::get('/feedback', 'ArticleController@show');

Route::get('/feedback/add', 'ArticleController@addfeedback');
Route::post('/feedback/add', 'ArticleController@savefeedback');

Route::get('/feedback/edit/{id}', 'ArticleController@editfeedback');
Route::post('/feedback/edit/{id}', 'ArticleController@updatefeedback');

Route::get('/feedback/delete/{id}', 'ArticleController@deletefeedback');


Route::get('/', function () {
    return view('welcome');
});
