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
Route::get('home', ['as'=>'dashboard', 'uses'=>'Admin\DashboardController@index'])->name('home');
// Route::prefix('Admin')->group(function(){
//     Route::middleware(['admin'])->name('admin.')->namespace('Admin')->group(function(){
//         Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@index']);
//         Route::resource('ingeniera','IngenieriaController');
//         Route::resource('almacen','AlmacenController');
//         Route::resource('calidad','CalidadController');
//         Route::resource('compras','ComprasController');
//         Route::resource('categories','CategoriesController');
//         Route::resource('contabilidad','ContabilidadController');
//     });
Route::get('cotizador', 'CotizacionController@index')->name('cotizador');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('cotizador', 'Admin\DashboardController@cotizador')->name('cotizador');

