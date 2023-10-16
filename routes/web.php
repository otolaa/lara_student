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
        Route::get('/setting', 'IndexController@setting')->name('admin.main.setting');
    });

    Route::group(['namespace' => 'User', 'prefix'=>'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'IndexController@create')->name('admin.user.create');
        Route::post('/', 'IndexController@store')->name('admin.user.store');
        Route::get('/{user}', 'IndexController@show')->name('admin.user.show');
        Route::get('/{user}/edit', 'IndexController@edit')->name('admin.user.edit');
        Route::patch('/{user}', 'IndexController@update')->name('admin.user.update');
        Route::delete('/{user}', 'IndexController@delete')->name('admin.user.delete');
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

    Route::group(['namespace' => 'Groups', 'prefix'=>'groups'], function () {
        Route::get('/', 'IndexController')->name('admin.groups.index');
        Route::get('/create', 'CreateController')->name('admin.groups.create');
        Route::post('/', 'StoreController')->name('admin.groups.store');
        Route::get('/{group}', 'ShowController')->name('admin.groups.show');
        Route::get('/{group}/edit', 'EditController')->name('admin.groups.edit');
        Route::patch('/{group}', 'UpdateController')->name('admin.groups.update');
        Route::delete('/{group}', 'DeleteController')->name('admin.groups.delete');
    });

    Route::group(['namespace' => 'Statuses', 'prefix'=>'statuses'], function () {
        Route::get('/', 'IndexController')->name('admin.statuses.index');
        Route::get('/create', 'IndexController@create')->name('admin.statuses.create');
        Route::post('/', 'IndexController@store')->name('admin.statuses.store');
        Route::get('/{status}', 'IndexController@show')->name('admin.statuses.show');
        Route::get('/{status}/edit', 'IndexController@edit')->name('admin.statuses.edit');
        Route::patch('/{status}', 'IndexController@update')->name('admin.statuses.update');
        Route::delete('/{status}', 'IndexController@delete')->name('admin.statuses.delete');
    });

    Route::group(['namespace' => 'Sgcwts', 'prefix'=>'sgcwts'], function () {
        Route::get('/', 'IndexController')->name('admin.sgcwts.index');
        Route::get('/create', 'CreateController')->name('admin.sgcwts.create');
        Route::post('/', 'StoreController')->name('admin.sgcwts.store');
        Route::get('/{sgcwt}', 'ShowController')->name('admin.sgcwts.show');
        Route::get('/{sgcwt}/edit', 'EditController')->name('admin.sgcwts.edit');
        Route::patch('/{sgcwt}', 'UpdateController')->name('admin.sgcwts.update');
        Route::delete('/{sgcwt}', 'DeleteController')->name('admin.sgcwts.delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
