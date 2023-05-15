<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOpeningController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[JobOpeningController::class,'index']);
Route::get('/job-opening',[JobOpeningController::class,'index']);

Route::get('/job-opening/add',[JobOpeningController::class,'add']);
Route::post('/job-opening/add',[JobOpeningController::class,'create']);
Route::post('/job-opening/delete/{id}',[JobOpeningController::class,'delete']);

Route::get('/user',[UserController::class,'index']);
Route::get('/report',[ReportController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
