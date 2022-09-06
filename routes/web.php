<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\Select2AutocompleteController;

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
Route::post("/ajax_accounts", [AccountController::class, 'store']);
Route::get('/accounts/{id}/edit', [AccountController::class, 'edit']);