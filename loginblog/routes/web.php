<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [CitiesController::class, 'index']);
Route::get('/places/{place}', [CitiesController::class, 'show']);
Route::get('/create', [CitiesController::class, 'create']);
Route::post('/store', [CitiesController::class, 'store']);

Route::get('/logout', [CitiesController::class, 'logout']);
Route::get('/places/delete', [CitiesController::class, 'destroy']);