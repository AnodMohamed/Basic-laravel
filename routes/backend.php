<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\Backend\customers\CustomersController;


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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/backend', [PostController::class,'backend' ]);

Route::get('/hello', [PostController::class,'hello' ]);

Route::get('/test', [PostController::class,'test' ]);

Route::get('/you-age',[AgeController::class,'index'])->middleware('CheckAge');