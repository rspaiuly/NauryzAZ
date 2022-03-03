<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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


Route::get('/', [PageController::class, 'index'])->name('index');


Route::group(['middleware' => 'guest'], function () {
    Route::post('authorization', [UserController::class, 'authorization'])->name('authorization');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/profile', 'pages.profile')->name('profile');
});
