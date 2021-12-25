<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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


//Route::get('/', function () {
//    return view('products/edit');
//});

/*
|--------------------------------------------------------------------------
| Dev tools
|--------------------------------------------------------------------------
|
*/


route::resource('posts',PostController::class);
route::resource('Users',UserController::class);
route::resource('products',ProductController::class);
