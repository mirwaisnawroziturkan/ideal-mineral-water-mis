<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\EmployeeController;


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
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/mainpage', [MainController::class, 'mainpage'])->middleware('auth');
Route::get('/admins', [MainController::class, 'admins'])->middleware('auth');
Route::get('/vendors', [VendorController::class, 'vendors'])->middleware('auth');
Route::post('/vendors', [VendorController::class, 'store']);
Route::delete('/vendors/{id}', [VendorController::class, 'destroy']);
Route::get('/sales', [SaleController::class, 'sales'])->middleware('auth');
Route::post('/sales', [SaleController::class, 'store']);
Route::delete('/sales/{id}', [SaleController::class, 'destroy']);
Route::get('/salaries', [SalaryController::class, 'salaries'])->middleware('auth');
Route::post('/salaries', [SalaryController::class, 'store']);
Route::delete('/salaries/{id}', [SalaryController::class, 'destroy']);
Route::get('/expenses', [ExpenseController::class, 'expenses'])->middleware('auth');
Route::post('/expenses', [ExpenseController::class, 'store']);
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy']);
Route::get('/employies', [EmployeeController::class, 'employies'])->middleware('auth');
Route::post('/employies', [EmployeeController::class, 'store']);
Route::delete('/employies/{id}', [EmployeeController::class, 'destroy']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
