<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get(
    '/',
     [UserController::class, 'signin']
)->name('Login');

Route::get(
    '/signup',
    [UserController::class, 'signup']
);

Route::post(
    '/login',
    [UserController::class, 'login']
);

Route::post(
    '/users/store',
    [UserController::class, 'store']
);

Route::get(
    '/products',
     [ProductController::class, 'index']
    )->middleware('auth');

    Route::get(
        '/products/create',
        [ProductController::class, 'create']
    )->middleware('auth');

    Route::post(
        '/products/store',
        [ProductController::class, 'store']
    )->middleware('auth');

    Route::get(
        '/products/{id}',
        [ProductController::class, 'show']
    )->middleware('auth');

    Route::get(
        '/products/edit/{id}',
        [ProductController::class, 'edit']
    )->middleware('auth');

    Route::post(
        '/products/update/{id}',
        [ProductController::class, 'update']
    )->middleware('auth');

    Route::get(
        '/products/delete/{id}',
        [ProductController::class, 'destroy']
    )->middleware('auth');

    