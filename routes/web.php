<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**************************  UTILISATION DES GATES ET DES MIDDLEWARE DANS LES ROUTES ***********************/

/* Route ::get('/posts/delete', 'PostController@delete')->middleware('can:isAdmin')->name('post.delete');
Route ::get('/posts/update', 'PostController@update')->middleware('can:isManager')->name('post.update');
Route ::get('/posts/create', 'PostController@create')->middleware('can:isUser')->name('post.create'); */
