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
    return view('index');
});

/*Route::get('/', 'Controller@home')->name('index');*/
/*Route::resource('mail', 'MailController');*/
/*Route::resource('mail', 'MailController');*/



Route::get('/contacto', [
    'uses' => 'MailController@create'
]);

Route::post('/contacto', [
    'uses' => 'MailController@store',
    'as' => 'contacto.store'
]);
