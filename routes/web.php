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

Route::group(['middleware' => 'auth'], function() {
Route::get('/drills/new','DrillsController@new')->name('drills.new')->middleware('check');
Route::get('/drills/select','DrillsController@select')->name('drills.select');
Route::get('/drills/kiyaku','DrillsController@kiyaku')->name('drills.kiyaku');
Route::post('/drills/receive','DrillsController@receive')->name('drills.receive');
Route::post('/drills/result','DrillsController@result')->name('drills.result');
Route::get('/drills/result','DrillsController@result')->name('drills.result');
Route::post('/drills/problem/{cont}/{diff}','DrillsController@problem')->name('drills.problem');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/drills','DrillsController@create')->name('drills.create');
});
Auth::routes();
