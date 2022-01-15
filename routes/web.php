<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('admin')->group(function(){
    Route::get('/', 'DashboardController@__invoke')->name('dashboard.index');
    Route::resource('department', DepartmentController::class)->except('show')->middleware('admin');
    Route::resource('location',LocationController::class)->except('show')->middleware('admin');
    Route::resource('brand', BrandController::class)->except('show')->middleware('admin');
    Route::resource('type', TypeController::class)->except('show')->middleware('admin');
    Route::resource('user', UserController::class)->except('show')->middleware('admin');
    Route::resource('vendor', VendorController::class)->except('show')->middleware('admin');
    Route::get('asset/export_mapping', 'AssetController@export_mapping')->name('asset.export_mapping')->middleware('user');
    Route::get('license/export_mapping', 'LicenseController@export_mapping')->name('license.export_mapping')->middleware('user');
    Route::get('maintenance/export_mapping', 'MaintenanceController@export_mapping')->name('maintenance.export_mapping')->middleware('user');
    Route::resource('asset', AssetController::class)->middleware('admin');
    Route::resource('license', LicenseController::class)->middleware('admin');
    Route::resource('maintenance', MaintenanceController::class)->middleware('admin');
    Route::get('my-asset/{id}', 'MyAssetController@__invoke')->name('myasset.index');
    Route::get('my-license/{id}', 'MyLicenseController@__invoke')->name('mylicense.index');
    
    Route::prefix('transfer')->group(function(){
        Route::get('/', 'TransferController@index')->name('transfer.index')->middleware('auth');
        Route::get('/create', 'TransferController@create')->name('transfer.create')->middleware('auth');
        Route::post('/create', 'TransferController@store')->name('transfer.store')->middleware('auth');
        Route::get('/{id}/set-status', 'TransferController@setStatus')->name('transfer.status')->middleware('auth');
        Route::delete('/{transfer}', 'TransferController@destroy')->name('transfer.destroy')->middleware('auth');
    });
    Route::get('/download-request', 'DownloadController@downloadRequest')->name('download.request');
    Route::get('/change-password', 'PasswordController@edit')->name('user.password.edit')->middleware('auth');
    Route::patch('/change-password', 'PasswordController@update')->name('user.password.update');
    Route::post('/license/print', 'LicenseController@licensePrint')->name('license.print')->middleware('user');
    Route::post('/asset/print', 'AssetController@assetPrint')->name('asset.print')->middleware('user');
    Route::post('/maintenance/print', 'MaintenanceController@maintenancePrint')->name('maintenance.print')->middleware('user');
    Route::get('/vendor/print', 'VendorController@vendorPrint')->name('vendor.print')->middleware('user');
    Route::get('/user/print', 'UserController@userPrint')->name('user.print')->middleware('user');
    Route::view('/manager-print', 'pages.admin.report.index')->name('manager.print')->middleware('user');

});

Auth::routes(['register' => false]);