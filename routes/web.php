<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login     q');
});

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/', 'DashboardController@__invoke')->name('dashboard.index');
    Route::resource('department', DepartmentController::class)->except('show');
    Route::resource('location',LocationController::class)->except('show');
    Route::resource('brand', BrandController::class)->except('show');
    Route::resource('type', TypeController::class)->except('show');
    Route::resource('user', UserController::class)->except('show');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
