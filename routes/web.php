<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/', 'DashboardController@__invoke')->name('dashboard.index');
    Route::resource('department', DepartmentController::class)->except('show');
    Route::resource('location',LocationController::class)->except('show');
    Route::resource('brand', BrandController::class)->except('show');
    Route::resource('type', TypeController::class)->except('show');
    Route::resource('user', UserController::class)->except('show');
    Route::resource('vendor', VendorController::class)->except('show');
    Route::resource('asset', AssetController::class);
    Route::resource('license', LicenseController::class);
    Route::resource('maintenance', MaintenanceController::class);
});

Auth::routes(['register' => false]);