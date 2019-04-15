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
        Route::get('com', 'CotizacionCotroller@propuesta')->name('complejidad');
        Route::get('cliente','ClientController@index')->name('client');
        Route::get('cliente/create','ClientController@create')->name('client.alta');
        Route::post('cliente/save','ClientController@store')->name('client.save');
        Route::get('cliente/{id}','ClientController@edit')->name('client.edit');
        Route::patch('cliente/update/{id}','ClientController@update')->name('client.update');
        route::DELETE('cliente/delet/{id}','ClientController@destroy');

    });
});
