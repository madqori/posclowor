<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::get('/', function()
// {
// 	return View::make('pages.home');
// });
// Route::get('about', function()
// {
// 	return View::make('pages.about');
// });
// Route::get('projects', function()
// {
// 	return View::make('pages.projects');
// });
// Route::get('contact', function()
// {
// 	return View::make('pages.contact');
// });

// Route::get('/', function()
// {
// 	return View::make('layouts.sidebar');
// });


Route::get('/', 'IndexController@index');

//pindah page
Route::get('barang','BarangController@index');
Route::get('jenisbarang','JenisBarangController@index');
Route::get('warnabarang','WarnaBarangController@index');
Route::get('ukuranbarang','UkuranBarangController@index');
Route::get('supplier','SupplierController@index');


//input ke database
Route::post('warnabarang/input', 'WarnaBarangController@input'); //sementara pake IndexController nanti pake UkuranBarangController
Route::post('ukuranbarang/input', 'IndexController@input');
Route::post('jenisbarang/input','JenisBarangController@input');
Route::post('supplier/input','IndexController@input');


//hapus dari database
Route::get('warnabarang/hapus/{id}', 'WarnaBarangController@hapus');
Route::get('supplier/hapus/{id}','IndexController@hapus');
Route::get('jenisbarang/hapus/{id}', 'IndexController@hapus');
// Route::post('mataajar/doupdate', 'IndexController@doEdit');


