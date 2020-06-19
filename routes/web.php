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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/codes', 'HomeController@codes')->name('codes');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/mail', 'HomeController@mail')->name('mail');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/products1', 'HomeController@products1')->name('products1');
Route::get('/products2', 'HomeController@products2')->name('products2');
Route::get('/single', 'HomeController@single')->name('single');

