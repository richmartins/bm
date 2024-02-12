<?php

use App\Http\Controllers\BackofficeControler;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('home');
});

// login
Route::get('login', [LoginController::class, 'login'])->name('login-view');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');

Route::get('logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
Route::post('update-profile', [LoginController::class, 'update'])
    ->name('update-profile')
    ->middleware('auth');

Route::group([
    'prefix'=>'backoffice',
    'middleware' => 'auth'
], function(){

    // dashboard
    Route::get('dashboard', [BackofficeControler::class, 'index'])->name('dashboard');

    // upload new menues
    Route::post('menus/update', [BackofficeControler::class, 'update_menu'])
        ->name('update_menu');
});

// Route::get();
// Route::post();
// Route::put();
// Route::delete();

