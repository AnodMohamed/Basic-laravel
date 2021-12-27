<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\customers\CustomersController;
use App\Http\Controllers\AgeController;


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

Route::get('/frontend', [PostController::class,'frontend' ]);

//Route::get('/home', [PostController::class,'posts' ]);

Route::get('/contact', [PostController::class,'contact_us' ]);

Route::get('/add_customer',[CustomersController::class, 'add_customer']);


/*
Route::namespace('customers')->group(function(){

    Route::get('/add_customer',[CustomersController::class, 'add_customer']);

});
*/

/*
Route::prefix('/admin')->group(function () {

    Route::get('/add_customer',[CustomersController::class, 'add_customer']);

});
*/

/*
Route::group(['prefix'=>'admin', 'namespace'=>'customers'], function(){

    Route::get('/add_customer',[CustomersController::class, 'add_customer']);

});*/

Route::namespace('Backend')->group(function(){

    Route::get('/add_posts',[PostController::class, 'create']);
    Route::Post('/add_posts/store',[PostController::class, 'store'])->name('posts.store');
    Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
    Route::Post('/posts/update{id}',[PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/destroy{id}',[PostController::class, 'destroy'])->name('posts.destroy');

});

Route::get('/you-age',[AgeController::class,'index'])->middleware('CheckAge');