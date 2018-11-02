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


Route::get('/', 'HomeController@index')->name('/');
Route::get('/works/{id}', 'HomeController@works');
Route::get('/law', 'HomeController@law');
Route::get('/thanks', 'HomeController@thanks');
Route::get('/contact', 'HomeController@contact');

Route::group(['middleware'=>'auth'], function (){
  Route::get('/signOut', 'AuthController@signOut')->name('signOut');
});

Route::group(['middleware'=>'guest'], function (){
  Route::get('/sheriff', 'AuthController@signForm')->name('signForm');
  Route::post('/register', 'AuthController@register')->name('register');
  Route::post('/signIn', 'AuthController@signIn')->name('signIn');
});



Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'admin'
], function () {
  Route::resource('/categories', 'CategoriesController');
  Route::resource('/works', 'WorksController');
  Route::resource('/users', 'UsersController');
});

