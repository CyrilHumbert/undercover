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
    return view('pages/create-rooms');
});

/*Route::get('/create-rooms', function () {
    return view('pages/create-rooms');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/finished', 'RoomController@createRoom');

Route::get('/room/{room_link_code}', 'RoomController@roomRedirect');

Route::get('/room/waiting/{room_link_code}');
