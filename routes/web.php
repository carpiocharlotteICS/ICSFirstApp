<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\OrderController;


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
    return view('main.index');
});

Route::get('/index3', function () {
    return view('main.index3');
});

Route::get("/accounts", [AccountController::class, 'index']);
Route::post("/ajax_accounts", [AccountController::class, 'store'])->name('accounts');
Route::get('/accounts/{id}/edit', [AccountController::class, 'edit']);
// Add New Account Group
Route::get("/addAccGroup", [AccountController::class, 'addAccGroup']);
Route::post('/storeNewGroup', [AccountController::class, 'storeNewGroup']);
// Add New Account Type
Route::post('/storeNewType', [AccountController::class, 'storeNewType']);
Route::get("/addAccType", [AccountController::class, 'addAccType']);
// Select2 Dropdown 
Route::post("/getGroup", [SelectController::class, 'getGroup'])->name('getGroup');
Route::post("/getType", [SelectController::class, 'getType'])->name('getType');
// Get Purchase Order data
Route::get("/orders", [OrderController::class, 'index']);
Route::post("/ajax_orders", [OrderController::class, 'store'])->name('orders');