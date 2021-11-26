<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/', 'DashboardController@__invoke')->name('dashboard.index');
    Route::resource('department', DepartmentController::class)->except('show');
    Route::resource('location',LocationController::class)->except('show');
    Route::resource('brand', BrandController::class)->except('show');
    Route::resource('type', TypeController::class)->except('show');
});
