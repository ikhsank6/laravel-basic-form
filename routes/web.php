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

Route::get('/', function() {
    return view('home');
});

Route::get('/pusher', function() {
    event(new App\Events\NotificationPusher('Hi ikhsan!'));
    return "Event has been sent!";
});

Route::get('/notification', 'PusherNotificationController@sendNotification');

Route::get('upload/index','uploadFile@index');
Route::post('upload/store','uploadFile@store');

Route::get('employee/index','pegawaiController@indexemployee');
Route::get('employee/getdata/{param}','pegawaiController@getdata')->name('employee.getdata');

Route::get('pegawai/index','pegawaiController@indexpegawai');
Route::get('pegawai/getdata','pegawaiController@getdata1');

Route::get('pegawai','pegawaiController@index');
Route::get('pegawai/create','pegawaiController@create');
Route::post('pegawai/store','pegawaiController@store');
Route::get('pegawai/edit/{id}','pegawaiController@edit');
Route::post('pegawai/update','pegawaiController@update');
Route::get('pegawai/destroy/{id}','pegawaiController@destroy');
