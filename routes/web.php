<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix'=>'admin', 'middleware'=>['auth','admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

     Route::group(['namespace' => 'User', 'prefix'=>'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Courses', 'prefix'=>'courses'], function () {
        Route::get('/', 'IndexController')->name('admin.courses.index');
        Route::get('/create', 'CreateController')->name('admin.courses.create');
        Route::post('/', 'StoreController')->name('admin.courses.store');
        Route::get('/{course}', 'ShowController')->name('admin.courses.show');
        Route::get('/{course}/edit', 'EditController')->name('admin.courses.edit');
        Route::patch('/{course}', 'UpdateController')->name('admin.courses.update');
        Route::delete('/{course}', 'DeleteController')->name('admin.courses.delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
