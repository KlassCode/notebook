<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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
// Route::post('login',[UserController::class,'login']);
// Route::post('register',[UserController::class,'register']);
// Route::get('create',[UserController::class,'create']);
// Route::post('logout',[UserController::class,'logout']);
   
// Route::get('/contactList',[ContactController::class,'index']);
// Route::prefix('auth')->name('auth.')->group( function () {
//     Route::group( [ 'middleware' => 'auth' ], function(){
        
        
//     });
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');
