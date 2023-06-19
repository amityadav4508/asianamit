<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactContrller;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/projects', [HomeController::class, 'products']);
Route::get('/services', [HomeController::class, 'services']);
Route::view('/contact', 'contact');
Route::post('/contact', [HomeController::class, 'create']);


// Route::post('/contact',[ContactController::class, 'create']);
