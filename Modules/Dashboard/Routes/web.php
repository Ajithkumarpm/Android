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

/*Route::prefix('dashboard')->group(function() {
    Route::get('/', 'DashboardController@index');
*/

Route::prefix('android-admin')->middleware('web')->group(function() 
{
	
 Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

});
