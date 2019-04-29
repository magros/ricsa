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
        Route::post('autorizar/{id}','CotizacionCotroller@autorizar')->name('autorizar');
        Route::get('cotizador/{id}','CotizacionCotroller@cotizador')->name('quoting');
        Route::DELETE('propuesta/delet/{id}','CotizacionCotroller@destroy');
        Route::get('material/{id}','CotizacionCotroller@material');

        Route::get('material','MaterialController@index')->name('material');
        Route::get('create','MaterialController@create')->name('material.create');
        Route::post('save','MaterialController@store')->name('material.save');
        Route::DELETE('delet/{id}','MaterialController@destroy');
        Route::post('list/material','MaterialController@list')->name('material.cotizador');
        Route::post('mano','MaterialController@ManoObra')->name('mano.obra');
        Route::DELETE('delet/mano/{id}','MaterialController@deleteManoObra');


        Route::get('rics', ['as'=>'rics', 'uses'=>'CotizacionCotroller@rics']);

        Route::get('cliente','ClientController@index')->name('client');
        Route::get('cliente/create','ClientController@create')->name('client.alta');
        Route::post('cliente/save','ClientController@store')->name('client.save');
        Route::get('cliente/{id}','ClientController@edit')->name('client.edit');
        Route::patch('cliente/update/{id}','ClientController@update')->name('client.update');
        Route::DELETE('cliente/delet/{id}','ClientController@destroy');

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
        Route::DELETE('proyecto/delet/{id}','ProyectoController@destroy');

        Route::get('material','MaterialController@index')->name('material');
        Route::get('create','MaterialController@create')->name('material.create');
        Route::post('store','MaterialController@store')->name('material.store');
        Route::get('material/{id}','MaterialController@edit')->name('material.edit');
        Route::patch('material/update/{id}','MaterialController@update')->name('material.update');
        Route::DELETE('material/delet/{id}','MaterialController@destroy');



    });
});

Route::prefix('precio')->group(function(){
    Route::middleware(['precio'])->name('precio.')->namespace('Precio')->group(function()
    {
        Route::get('/', 'DolarController@index');
        Route::get('dolar','DolarController@index')->name('dollar');
        Route::get('dolar/create','DolarController@create')->name('dollar.create');
        Route::post('dolar/save','DolarController@store')->name('dollar.save');
        Route::get('dolar/{id}','DolarController@edit')->name('dollar.edit');
        Route::patch('dolar/update/{id}','DolarController@update')->name('dollar.update');
        Route::DELETE('dolar/delet/{id}','DolarController@destroy');

        Route::get('metal','MetalController@index')->name('metal');
        Route::get('metal/create','MetalController@create')->name('metal.alta');
        Route::post('metal/save','MetalController@store')->name('metal.save');
        Route::get('metal/{id}','MetalController@edit')->name('metal.edit');
        Route::patch('metal/update/{id}','MetalController@update')->name('metal.update');
        Route::DELETE('metal/delet/{id}','MetalController@destroy');

    });
});

Route::prefix('almacen')->group(function(){
    Route::middleware(['alamcen'])->name('almacen.')->namespace('Almacen')->group(function()
    {
        Route::get('/', 'ProyectoController@index');
        Route::get('proyecto','ProyectoController@index')->name('proyect');
        Route::get('proyecto/create','ProyectoController@create')->name('proyect.create');
        Route::post('proyecto/save','ProyectoController@store')->name('proyect.save');
        Route::get('proyecto/{id}','ProyectoController@edit')->name('proyect.edit');
        Route::patch('proyecto/update/{id}','ProyectoController@update')->name('proyect.update');
        Route::DELETE('proyecto/delet/{id}','ProyectoController@destroy');

        Route::get('inventory','InventoryController@index')->name('inventory');
        Route::get('inventory/create','InventoryController@create')->name('inventory.create');
        Route::post('inventory/store','InventoryController@store')->name('inventory.store');
        Route::get('inventory/{id}','InventoryController@edit')->name('inventory.edit');
        Route::patch('inventory/update/{id}','InventoryController@update')->name('inventory.update');
        Route::DELETE('inventory/delet/{id}','InventoryController@destroy');

        Route::get('salida','SalidaController@index')->name('exit');
        Route::get('salida/create','SalidaController@create')->name('exit.create');
        Route::post('salida/store','SalidaController@store')->name('exit.store');
        Route::get('salida/{id}','SalidaController@edit')->name('exit.edit');
        Route::patch('salida/update/{id}','SalidaController@update')->name('exit.update');
        Route::DELETE('salida/delet/{id}','SalidaController@destroy');
    });
});
