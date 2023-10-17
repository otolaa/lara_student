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
        Route::get('/create', 'IndexController@create')->name('admin.courses.create');
        Route::post('/', 'IndexController@store')->name('admin.courses.store');
        Route::get('/{course}', 'IndexController@show')->name('admin.courses.show');
        Route::get('/{course}/edit', 'IndexController@edit')->name('admin.courses.edit');
        Route::patch('/{course}', 'IndexController@update')->name('admin.courses.update');
        Route::delete('/{course}', 'IndexController@delete')->name('admin.courses.delete');
    });

    Route::group(['namespace' => 'Groups', 'prefix'=>'groups'], function () {
        Route::get('/', 'IndexController')->name('admin.groups.index');
        Route::get('/create', 'IndexController@create')->name('admin.groups.create');
        Route::post('/', 'IndexController@store')->name('admin.groups.store');
        Route::get('/{group}', 'IndexController@show')->name('admin.groups.show');
        Route::get('/{group}/edit', 'IndexController@edit')->name('admin.groups.edit');
        Route::patch('/{group}', 'IndexController@update')->name('admin.groups.update');
        Route::delete('/{group}', 'IndexController@delete')->name('admin.groups.delete');
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
        Route::get('/create', 'IndexController@create')->name('admin.sgcwts.create');
        Route::post('/', 'IndexController@store')->name('admin.sgcwts.store');
        Route::get('/{sgcwt}', 'IndexController@show')->name('admin.sgcwts.show');
        Route::get('/{sgcwt}/edit', 'IndexController@edit')->name('admin.sgcwts.edit');
        Route::patch('/{sgcwt}', 'IndexController@update')->name('admin.sgcwts.update');
        Route::delete('/{sgcwt}', 'IndexController@delete')->name('admin.sgcwts.delete');
    });

    Route::group(['namespace' => 'Settings', 'prefix'=>'settings'], function () {
        Route::get('/', 'IndexController')->name('admin.settings.index');
        Route::get('/create', 'IndexController@create')->name('admin.settings.create');
        Route::post('/', 'IndexController@store')->name('admin.settings.store');
        Route::get('/{setting}', 'IndexController@show')->name('admin.settings.show');
        Route::get('/{setting}/edit', 'IndexController@edit')->name('admin.settings.edit');
        Route::patch('/{setting}', 'IndexController@update')->name('admin.settings.update');
        Route::delete('/{setting}', 'IndexController@delete')->name('admin.settings.delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
