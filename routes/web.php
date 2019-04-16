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

    return view('admin/login');
});
Auth::routes();

Route::prefix('admin')->group(function(){

    Route::prefix('login')->namespace('Auth')->group(function(){
        Route::get('/',['as'=>'admin.login','uses'=>'LoginController@adminLogin']);
    });


    Route::middleware(['admin'])->name('admin.')->namespace('Admin')->group(function()
    {
        Route::get('/', ['as'=>'dashboard', 'uses'=>'DashboardController@index']);
    });
});

Route::prefix('cotizacion')->group(function(){
    Route::middleware(['cotizador'])->name('cotizacion.')->namespace('Cotizacion')->group(function()
    {
        Route::get('/', 'CotizacionCotroller@index');
        Route::get('propuestas', 'CotizacionCotroller@proyectos')->name('index');
        Route::get('propuesta', 'CotizacionCotroller@create')->name('create');
        Route::post('propuesta', 'CotizacionCotroller@store')->name('store');
        Route::get('cotizador','CotizacionCotroller@cotizador')->name('quoting');


        Route::get('cliente','ClientController@index')->name('client');
        Route::get('cliente/create','ClientController@create')->name('client.alta');
        Route::post('cliente/save','ClientController@store')->name('client.save');
        Route::get('cliente/{id}','ClientController@edit')->name('client.edit');
        Route::patch('cliente/update/{id}','ClientController@update')->name('client.update');
        route::DELETE('cliente/delet/{id}','ClientController@destroy');

    });
});

Route::prefix('ingenieria')->group(function(){
    Route::middleware(['ingenieria'])->name('ingenieria.')->namespace('Ingenieria')->group(function()
    {

        // Route::resource('proyects','ProyectoController');
        Route::get('/', 'ProyectoController@index');
        Route::get('proyecto','ProyectoController@index')->name('proyect');
        Route::get('proyecto/create','ProyectoController@create')->name('proyect.create');
        Route::post('proyecto/save','ProyectoController@store')->name('proyect.save');
        Route::get('proyecto/{id}','ProyectoController@edit')->name('proyect.edit');
        Route::patch('proyecto/update/{id}','ProyectoController@update')->name('proyect.update');
        route::DELETE('proyecto/delet/{id}','ProyectoController@destroy');

    });
});

