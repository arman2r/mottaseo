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


Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', ['as' => 'home', 'uses' => 'Controller@home']);

Route::get('/artesgraficas', ['as' => 'artesgraficas', 'uses' => 'Controller@artesgraficas']);

Route::get('/disenoweb', ['as' => 'disenoweb', 'uses' => 'Controller@disenoweb']);

Route::get('/optimizar', ['as' => 'optimizar', 'uses' => 'Controller@optimizar']);

Route::get('/seo', ['as' => 'seo', 'uses' => 'Controller@seo']);

Route::get('/pagoxclic', ['as' => 'pagoxclic', 'uses' => 'Controller@pagoxclic']);

Route::get('/socialmedia', ['as' => 'socialmedia', 'uses' => 'Controller@socialmedia']);

Route::get('/portafolio', ['as' => 'portafolio', 'uses' => 'Controller@portafolio']);

Route::get('/casosexito', ['as' => 'casosexito', 'uses' => 'Controller@casosexito']);

Route::get('/nosotros', ['as' => 'nosotros', 'uses' => 'Controller@nosotros']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'Controller@blog']);

Route::get('/politicas', ['as' => 'politicas', 'uses' => 'Controller@politicas']);

Route::get('/terminosycondiciones', ['as' => 'terminosycondiciones', 'uses' => 'Controller@terminosycondiciones']);

Route::get('/ideu', ['as' => 'ideu', 'uses' => 'Controller@ideu']);

Route::get('/tecnomusic', ['as' => 'tecnomusic', 'uses' => 'Controller@tecnomusic']);

Route::get('/sulicam', ['as' => 'sulicam', 'uses' => 'Controller@sulicam']);

Route::get('/cuchiyuyo', ['as' => 'cuchiyuyo', 'uses' => 'Controller@cuchiyuyo']);

/*Route::get('/', 'Controller@home')->name('index');*/
/*Route::resource('mail', 'MailController');*/
/*Route::resource('mail', 'MailController');*/



Route::get('/contactenos', ['as' => 'contactenos', 'uses' => 'MailController@contactenos']);


Route::post('/contacto', [
    'uses' => 'MailController@store',
    'as' => 'contacto.store'
]);

Route::post('/newsletter', [
    'uses' => 'newsletterController@store',
    'as' => 'newsletter.store'
]);
