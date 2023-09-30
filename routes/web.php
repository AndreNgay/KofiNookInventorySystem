<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsEmployee;
use App\Http\Middleware\IsOwner;
use App\Http\Controllers\InventoryController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('inventory', InventoryController::class);

Route::group(['middleware' => 'is_employee'], function () {
  
});

Route::group(['middleware' => 'is_owner'], function () {

});