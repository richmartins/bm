<?php

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
Route::get('login', function () {
    return view('login');
});

Route::post('login', [LoginController::class => 'authenticate'])->name('login');
Route::get('logout', [LoginController::class => 'logout'])->name('logout');

Route::middleware('auth:sanctum')->group(function(){
    Route::group(['prefix' => 'backoffice'], function (){
        // dashboard
        Route::get('dashboard', function(){
            return view('dashboard');
        });
        // upload new menu semaine
        // upload new menu saison
        // upload new menu boisson
    });
});
