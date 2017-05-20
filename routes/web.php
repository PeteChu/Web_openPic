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
//
// Route::get('/play/{grid?}', function ($grid) {
//   return view('play',['grid'=> $grid]);
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/play/{name}/{no}', 'HomeController@play');

Route::get('/album', 'albumsController@index');
Route::get('/albummanage/{album_name}', 'albumsController@edit');

Route::get('/upload', 'UploadController@index');
Route::post('/upload', 'UploadController@store');
