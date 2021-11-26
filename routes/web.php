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
    Route::resource('department', DepartmentController::class)->except('show');
    Route::resource('location',LocationController::class)->except('show');
    Route::resource('brand', BrandController::class)->except('show');
});
