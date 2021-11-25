<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/', 'DashboardController@__invoke')->name('dashboard.index');

    Route::prefix('department')->group(function(){
        Route::get('/', 'DepartmentController@index')->name('department.index');
        Route::get('/create', 'DepartmentController@create')->name('department.create');
        Route::post('/create', 'DepartmentController@store');
        Route::get('/{department}/edit', 'DepartmentController@edit')->name('department.edit');
        Route::put('/{department}', 'DepartmentController@update')->name('department.update');
        Route::delete('/{department}', 'DepartmentController@destroy')->name('department.destroy');
    });
});
