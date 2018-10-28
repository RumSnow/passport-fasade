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

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/works/{id}', 'HomeController@works');
Route::get('/law', 'HomeController@law');
Route::get('/thanks', 'HomeController@thanks');
Route::get('/contact', 'HomeController@contact');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
  Route::get('/', 'AdminController@index');
  Route::resource('/categories', 'CategoriesController');
  Route::resource('/works', 'WorksController');
  Route::resource('/users', 'UsersController');
});

