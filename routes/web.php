<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsEmployee;
use App\Http\Middleware\IsOwner;
use App\Http\Middleware\IsLoggedIn;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // Route::get('inventory', function () {
    //     return view('employee.inventory');
    // });
Route::group(['middleware' => 'is_logged_in'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});


Auth::routes();

Route::resource('inventory', InventoryController::class);

Route::put('inventory/{inventory}/update-stock', [InventoryController::class, 'updateStock'])
    ->name('inventory.updateStock');

Route::group(['middleware' => 'is_employee'], function () {
  
});

Route::group(['middleware' => 'is_owner'], function () {
    Route::resource('category', CategoryController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('account', AccountController::class);
});