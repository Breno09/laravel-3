<?php

use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

route::get(
    '/products',
     [ProductController::class, 'index']
    );

    route::get(
        '/products/create',
        [ProductController::class, 'create']
    );

    route::post(
        '/products/store',
        [ProductController::class, 'store']
    );

    route::get(
        '/products/{id}',
        [ProductController::class, 'show']
    );

    route::get(
        '/products/edit/{id}',
        [ProductController::class, 'edit']
    );
