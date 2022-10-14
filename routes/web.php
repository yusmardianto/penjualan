<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

Route::resource('penjualan', EmployeesController::class);
Route::any('penjualan/ajax-list', 'EmployeesController@ajaxList');
Route::get('penjualan/create', 'EmployeesController@create');
Route::post('penjualan/create', 'EmployeesController@store');
Route::get('penjualan/detail/{id}', 'EmployeesController@show');
