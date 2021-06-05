<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postLogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/postregister', 'AuthController@postregister')->name('postregister');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
Route::get('/item/show', 'ItemController@show')->name('showItem');
Route::get('/item/create', 'ItemController@create')->name('createItem');
Route::get('/sales/show', 'SalesController@create')->name('showSales');
Route::get('/sales/create', 'SalesController@create')->name('createSales');
});
