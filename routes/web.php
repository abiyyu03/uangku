<?php

use Illuminate\Support\Facades\Route;

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

/* Auth */
Route::get('/login',[App\Http\Controllers\Auth\LoginController::class,'index']);
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout']);
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('auth.login');

Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class,'index']);
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'register'])->name('auth.register');

Route::middleware('isAuth')->group(function(){
    Route::get('/',[App\Http\Controllers\DashboardController::class,'index']);
    /* Income */
    Route::get('/income',[App\Http\Controllers\IncomeController::class,'index']);
    Route::get('/income/create',[App\Http\Controllers\IncomeController::class,'create']);
    Route::post('/income/store',[App\Http\Controllers\IncomeController::class,'store'])->name('income.store');

    /* Outcome */
    Route::get('/outcome',[App\Http\Controllers\OutcomeController::class,'index']);
    Route::get('/outcome/create',[App\Http\Controllers\OutcomeController::class,'create']);
    Route::post('/outcome/store',[App\Http\Controllers\OutcomeController::class,'store'])->name('outcome.store');

    /* Debt */
    Route::get('/debt',[App\Http\Controllers\DebtController::class,'index']);
    Route::get('/debt/create',[App\Http\Controllers\DebtController::class,'create']);
    Route::post('/debt/store',[App\Http\Controllers\DebtController::class,'store'])->name('debt.store');
});