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
        Route::post('list/material-v2','MaterialController@listV2')->name('material.cotizador.v2');

        Route::post('mano','MaterialController@ManoObra')->name('mano.obra');
        Route::DELETE('delet/mano/{id}','MaterialController@deleteManoObra');
        Route::post('consumibles','MaterialController@consumibles')->name('consumibles');
        Route::DELETE('delet/consumible/{id}','MaterialController@deleteConsumible');

        Route::get('notificaciones','MaterialController@notificaciones')->name('notificaciones');
        Route::get('{ric}/materials', 'CotizacionCotroller@getMaterialQuotationByType');
        Route::get('{ric}/calculate-pricing', 'CotizacionCotroller@getPricingAndWeightEstimate');

        Route::get('rics', ['as'=>'rics', 'uses'=>'CotizacionCotroller@rics']);

        Route::get('cliente','ClientController@index')->name('client');
        Route::get('cliente/create','ClientController@create')->name('client.alta');
        Route::post('cliente/save','ClientController@store')->name('client.save');
        Route::get('cliente/{client}/edit','ClientController@edit')->name('client.edit');
        Route::patch('cliente/{client}/update','ClientController@update')->name('client.update');
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
        Route::get('inventario/{id}','InventoryController@getMaterial');
        Route::get('inventory/create','InventoryController@create')->name('inventory.create');
        Route::post('inventory/store','InventoryController@store')->name('inventory.store');
        Route::get('inventory/{id}','InventoryController@edit')->name('inventory.edit');
        Route::patch('inventory/update/{id}','InventoryController@update')->name('inventory.update');
        Route::DELETE('inventory/delet/{id}','InventoryController@destroy');

        Route::get('salida','SalidaController@index')->name('exit');
        Route::get('salida/create','SalidaController@create')->name('exit.create');
        Route::post('salida/store','SalidaController@store')->name('exit.store');
        Route::get('salida/{id}','SalidaController@edit')->name('exit.edit');
        Route::post('list/salida','SalidaController@list')->name('salida.almacen');
        Route::patch('salida/update/{id}','SalidaController@update')->name('exit.update');
        Route::DELETE('salida/delet/{id}','SalidaController@destroy');
    });
});

Route::prefix('calidad')->group(function(){
    Route::middleware(['calidad'])->name('calidad.')->namespace('Calidad')->group(function()
    {

        // Route::resource('proyects','ProyectoController');
        Route::get('/', 'ValidacionController@index');
        Route::get('validacion','ValidacionController@index')->name('validation');
        Route::get('validacion/create','ValidacionController@create')->name('validation.create');
        Route::post('validacion/save','ValidacionController@store')->name('validation.save');
        Route::get('validacion/{id}','ValidacionController@edit')->name('validation.edit');
        Route::patch('validacion/update/{id}','ValidacionController@update')->name('validation.update');
        Route::DELETE('validacion/delet/{id}','ValidacionController@destroy');

        Route::get('/', 'PersonalController@index');
        Route::get('personal','PersonalController@index')->name('personal');
        Route::get('personal/create','PersonalController@create')->name('personal.create');
        Route::post('personal/save','PersonalController@store')->name('personal.save');
        Route::get('personal/{id}','PersonalController@edit')->name('personal.edit');
        Route::patch('personal/update/{id}','PersonalController@update')->name('personal.update');
        Route::DELETE('personal/delet/{id}','PersonalController@destroy');

        Route::get('/', 'ReportesController@index');
        Route::get('reportes','ReportesController@index')->name('report');
        Route::get('reportes/create','ReportesController@create')->name('reports.create');
        Route::post('reportes/save','ReportesController@store')->name('reports.save');
        Route::get('reportes/{id}','ReportesController@edit')->name('reports.edit');
        Route::patch('reportes/update/{id}','ReportesController@update')->name('reports.update');
        Route::DELETE('reportes/delet/{id}','ReportesController@destroy');

    });
});

Route::prefix('compras')->group(function(){
    Route::middleware(['compras'])->name('compras.')->namespace('Compras')->group(function()
    {

        Route::get('/', 'ListaMaterialesController@index');
        Route::get('listamateriales','ListaMaterialesController@index')->name('listmaterial');
        Route::get('listamateriales/create','ListaMaterialesController@create')->name('listmaterial.create');
        Route::post('listamateriales/save','ListaMaterialesController@store')->name('listmaterial.save');
        Route::get('listamateriales/{id}','ListaMaterialesController@edit')->name('listmaterial.edit');
        Route::patch('listamateriales/update/{id}','ListaMaterialesController@update')->name('listmaterial.update');
        Route::DELETE('listamateriales/delet/{id}','ListaMaterialesController@destroy');

        Route::get('/', 'ListaConsumiblesController@index');
        Route::get('listaconsumibles','ListaConsumiblesController@index')->name('listconsumable');
        Route::get('listaconsumibles/create','ListaConsumiblesController@create')->name('listconsumables.create');
        Route::post('listaconsumibles/save','ListaConsumiblesController@store')->name('listconsumables.save');
        Route::get('listaconsumibles/{id}','ListaConsumiblesController@edit')->name('listconsumables.edit');
        Route::patch('listaconsumibles/update/{id}','ListaConsumiblesController@update')->name('listconsumables.update');
        Route::DELETE('listaconsumibles/delet/{id}','ListaConsumiblesController@destroy');

        Route::get('/', 'OrdenCompraController@index');
        Route::get('ordencompra','OrdenCompraController@index')->name('ordershopp');
        Route::get('ordencompra/create','OrdenCompraController@create')->name('ordershopp.create');
        Route::post('ordencompra/save','OrdenCompraController@store')->name('ordershopp.save');
        Route::get('ordencompra/{id}','OrdenCompraController@edit')->name('ordershopp.edit');
        Route::patch('ordencompra/update/{id}','OrdenCompraController@update')->name('ordershopp.update');
        Route::DELETE('ordencompra/delet/{id}','OrdenCompraController@destroy');

    });
});

Route::prefix('contabilidad')->group(function(){
    Route::middleware(['contabilidad'])->name('contabilidad.')->namespace('Contabilidad')->group(function()
    {

        // Route::resource('proyects','ProyectoController');
        Route::get('/', 'MaterialController@index');
        Route::get('material','MaterialController@index')->name('material');
        Route::get('material/create','MaterialController@create')->name('material.create');
        Route::post('material/save','MaterialController@store')->name('material.save');
        Route::get('material/{id}','MaterialController@edit')->name('material.edit');
        Route::patch('material/update/{id}','MaterialController@update')->name('material.update');
        Route::DELETE('material/delet/{id}','MaterialController@destroy');

        Route::get('/', 'ProvedoresController@index');
        Route::get('provedores','ProvedoresController@index')->name('provider');
        Route::get('provedores/create','ProvedoresController@create')->name('providers.create');
        Route::post('provedores/save','ProvedoresController@store')->name('providers.save');
        Route::get('provedores/{id}','ProvedoresController@edit')->name('providers.edit');
        Route::patch('provedores/update/{id}','ProvedoresController@update')->name('providers.update');
        Route::DELETE('provedores/delet/{id}','ProvedoresController@destroy');

        Route::get('/', 'ProyectosController@index');
        Route::get('proyectos','ProyectosController@index')->name('proyect');
        Route::get('proyectos/create','ProyectosController@create')->name('proyect.create');
        Route::post('proyectos/save','ProyectosController@store')->name('proyect.save');
        Route::get('proyectos/{id}','ProyectosController@edit')->name('proyect.edit');
        Route::patch('proyectos/update/{id}','ProyectosController@update')->name('proyect.update');
        Route::DELETE('proyectos/delet/{id}','ProyectosController@destroy');

        Route::get('/', 'ReportesController@index');
        Route::get('reportes','ReportesController@index')->name('report');
        Route::get('reportes/create','ReportesController@create')->name('reports.create');
        Route::post('reportes/save','ReportesController@store')->name('reports.save');
        Route::get('reportes/{id}','ReportesController@edit')->name('reports.edit');
        Route::patch('reportes/update/{id}','ReportesController@update')->name('reports.update');
        Route::DELETE('reportes/delet/{id}','ReportesController@destroy');

    });
});

Route::prefix('produccion')->group(function(){
    Route::middleware(['produccion'])->name('produccion.')->namespace('Produccion')->group(function()
    {

        // Route::resource('proyects','ProyectoController');
        Route::get('/', 'ProyectosController@index');
        Route::get('proyectos','ProyectosController@index')->name('proyect');
        Route::get('proyectos/create','ProyectosController@create')->name('proyect.create');
        Route::post('proyectos/save','ProyectosController@store')->name('proyect.save');
        Route::get('proyectos/{id}','ProyectosController@edit')->name('proyect.edit');
        Route::patch('proyectos/update/{id}','ProyectosController@update')->name('proyect.update');
        Route::DELETE('proyectos/delet/{id}','ProyectosController@destroy');

        Route::get('/', 'PersonalController@index');
        Route::get('personal','PersonalController@index')->name('personal');
        Route::get('personal/create','PersonalController@create')->name('personal.create');
        Route::post('personal/save','PersonalController@store')->name('personal.save');
        Route::get('personal/{id}','PersonalController@edit')->name('personal.edit');
        Route::patch('personal/update/{id}','PersonalController@update')->name('personal.update');
        Route::DELETE('personal/delet/{id}','PersonalController@destroy');

    });
});

Route::prefix('comercializacion')->group(function(){
    Route::middleware(['comercializacion'])->name('comercializacion.')->namespace('Comercializacion')->group(function()
    {

        // Route::resource('proyects','ProyectoController');
        Route::get('/', 'PreciosController@index');
        Route::get('precios','PreciosController@index')->name('price');
        Route::get('precios/create','PreciosController@create')->name('prices.create');
        Route::post('precios/save','PreciosController@store')->name('prices.save');
        Route::get('precios/{id}','PreciosController@edit')->name('prices.edit');
        Route::patch('precios/update/{id}','PreciosController@update')->name('prices.update');
        Route::DELETE('precios/delet/{id}','PreciosController@destroy');

        Route::get('/', 'ReportesController@index');
        Route::get('reportes','ReportesController@index')->name('report');
        Route::get('reportes/create','ReportesController@create')->name('reports.create');
        Route::post('reportes/save','ReportesController@store')->name('reports.save');
        Route::get('reportes/{id}','ReportesController@edit')->name('reports.edit');
        Route::patch('reportes/update/{id}','ReportesController@update')->name('reports.update');
        Route::DELETE('reportes/delet/{id}','ReportesController@destroy');

    });
});
