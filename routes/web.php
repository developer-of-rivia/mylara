<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Settings\SettingsController;

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
    return view('welcome');
});


/* auth */
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login/auth', [AuthController::class, 'auth']);
Route::post('/login/logout', [AuthController::class, 'logout']);



/* admin */
Route::get('/admin', [AdminController::class, 'index'])->name('admin-page');

/* my-heroes */
Route::get('/my-heroes', [HeroController::class, 'index']);

/* settings */
Route::get('/settings', [SettingsController::class, 'index']);

/* people */
Route::get('/people', [PeopleController::class, 'index'])->name('people');

/* frineds */
Route::get('/friends', [FriendsController::class, 'index']);
Route::get('/friends/add/{param}', [FriendsController::class, 'friendshipRequest']);