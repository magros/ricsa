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

Route::get('cotizador', 'Admin\DashboardController@cotizador')->name('cotizador');
// Route::get('/', function () {
//     return view('welcome');
// });
