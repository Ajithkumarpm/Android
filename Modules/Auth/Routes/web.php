<?php

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

/*Route::prefix('auth')->group(function() {
    Route::get('/', 'AuthController@index');
});*/

Route::group(['prefix' => 'android-admin','middleware' => 'web'], function()
{
    //Route::get('/', 'AuthController@index');
    //Auth Routes
    Route::get('/login', 'AuthController@login')->name('login');


   Route::post('/login',[ 'as' => '/login', 'uses' => 'AuthController@login'])->name('adminlogin');
    Route::post('/logout', 'AuthController@logout')->name('logout');


  /*  Route::post('/user/forgotpassword', 'AuthController@forgotpassword')->name('forgotpassword');
    Route::get('/generatenewpassword/{token}',['as' => 'generatenewpassword/','uses' => 'AuthController@generatenewpassword']);
    Route::post('/generatenewpassword','AuthController@generatenewpassword')->name('resetpassword');
    Route::get('/password/reset','AuthController@reset')->name('password.reset');*/
    //Pages in Dash board
    //Route::get('/dashboard', 'LarKenAdminController@index')->name('dashboard');
});
