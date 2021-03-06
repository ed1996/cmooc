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

Auth::routes();

Route::get('/faq', function() {
    return view('faq');
});

Route::get('logout', function(){
   Auth::logout();
    return view('welcome');
});


Route::get('/home', 'HomeController@index');
Route::resource('/formation', 'FormationController');
Route::resource('/post', 'PostController');
Route::resource('/comment', 'CommentController');

Route::resource('/cour', 'CourController');

Route::get('contact',
    ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'AboutController@store']);

