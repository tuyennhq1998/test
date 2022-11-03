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
Route::get('/a', function(){
    dd(session()->get('error'));
});
Route::get('/', 'HomeController@index')->name('index');
Route::post('/searchDate', 'HomeController@searchDate')->name('searchDate');
Route::get('/clear', 'HomeController@clear')->name('clear');
Route::post('/sendMail', 'HomeController@sendMail')->name('sendMail');
Route::post('/exportPdf', 'HomeController@exportPdf')->name('exportPdf');