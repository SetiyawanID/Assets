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
    Route::get('my-asset/{id}', 'MyAssetController@__invoke')->name('myasset.index');
    Route::get('my-license/{id}', 'MyLicenseController@__invoke')->name('mylicense.index');
    
    Route::prefix('transfer')->group(function(){
        Route::get('/', 'TransferController@index')->name('transfer.index');
        Route::get('/create', 'TransferController@create')->name('transfer.create');
        Route::post('/create', 'TransferController@store')->name('transfer.store');
        Route::get('/{id}/set-status', 'TransferController@setStatus')->name('transfer.status');
        Route::delete('/{transfer}', 'TransferController@destroy')->name('transfer.destroy');
    });

    Route::get('/download-request', 'DownloadController@downloadRequest')->name('download.request');

    Route::get('/change-password', 'PasswordController@edit')->name('user.password.edit');
    Route::patch('/change-password', 'PasswordController@update')->name('user.password.update');
});

Auth::routes(['register' => false]);