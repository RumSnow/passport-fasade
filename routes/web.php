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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('/');
Route::get('/works/{id}', 'HomeController@works');
Route::get('/law', 'HomeController@law');
Route::get('/thanks', 'HomeController@thanks')->name('thanks');
Route::get('/contact', 'HomeController@contact');

// Password Reset Routes
//Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


// Sign Routes
Route::group([
  'namespace' => 'Auth',
  ], function(){
  Route::get('/sheriff', 'RegisterController@showSignForm')->name('signForm');
  Route::post('/register', 'RegisterController@register')->name('register');
  Route::post('/login', 'LoginController@login')->name('login');
  Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');
});

// Mail Routes
Route::get('/send', 'MailController@send');

Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'admin'
], function () {
  Route::resource('/categories', 'CategoriesController');
  Route::resource('/works', 'WorksController');
  Route::resource('/users', 'UsersController');
});



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
