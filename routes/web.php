<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;

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

/* */
Route::get('/', function(){
    return view('pages/welcome');
});


/* auth */
Route::get('/login', [AuthController::class, 'login_page']);
Route::post('/login/auth', [AuthController::class, 'auth']);
Route::post('/login/logout', [AuthController::class, 'logout']);


/* admin */
Route::get('/admin', [AdminController::class, 'index']);