<?php

use App\Http\Controllers\EloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TaborController;
use App\Models\Post;

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
//Admin Routes
Route::prefix('admin')->name('admin')->group(function(){
    Route::resource('/users', UserController::class);
    ##Route::get('/admin/users/edit' ,[UserController::class, 'edit']);
    });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/tabors', [App\Http\Controllers\TaborController::class, 'tabors'])->name('tabors');


Route::resource('posts', PostsController::class);
Route::resource('tabors', TaborController::class);