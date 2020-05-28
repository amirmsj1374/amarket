<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//->middleware('auth')
Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {
    Route::get('/notice', 'PanelController@index')->name('notice');
    Route::post('/admin/panel/upload-image', 'PanelController@UploadImageSubject');

    Route::resource('/products', 'ProductController');

    Route::post('/ajax/{method}', 'AjaxController@main');
    Route::post('/ajax/selectattrs/{id}', 'AjaxController@selectattrs');

    Route::resource('/category', 'CategoryController');

    Route::resource('/attribute', 'AttributeController');

    Route::get('/values/{id}', 'ValueController@create')->name('show.value');
    Route::post('/values', 'ValueController@store')->name('set.value');
    Route::get('/values/{value}/edit', 'ValueController@edit')->name('edit.value');
    Route::put('/values/{value}', 'ValueController@update')->name('update.value');

    Route::resource('/inventory', 'InventoryController');
});


Route::get('/', function (){
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route of vue
Route::get('{path}', 'HomeController@vue')->where('path', '([A-z\d\-\_.]+)?');
