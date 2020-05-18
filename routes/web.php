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

Route::get('/welcome', function () {
    return view('welcome');
});
//Route::get('/myhome','HomeController@index')->name('hom0e');
Route::post('/email','EmailController@index');
Route::post('/email','EmailController@store');

Route::get('/about','AboutController@index');
Route::get('/services','ServicesController@index');

Route::get('/contactus','ContactController@index');
Route::post('/contactus','ContactController@store');//portfolio

Route::get('/blog','BlogController@index');
Route::get('/singleblog','SingleblogController@index');
Route::get('/portfolio','PortfolioController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
