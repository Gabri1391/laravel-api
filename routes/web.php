<?php

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


Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->middleware('auth')->name('admin.home');

//Rotte protette dall'amministrazione
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group( function(){
    //Home amministratore
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/users', 'UserController@index')->name('users.index');

    //Resource POST
    Route::resource('posts', 'PostController');

    Route::get('/{any}', function () {
        abort('404');
    })->where('any', '.*');
});


Route::get('/{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
