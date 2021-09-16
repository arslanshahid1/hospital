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

Route::get('/', 'App\Http\Controllers\pageController@home')->name('home');
Route::post('/saveAppointments', 'App\Http\Controllers\pageController@saveAppointments')->name('saveAppointments');
Route::post('/saveContact', 'App\Http\Controllers\pageController@saveContact')->name('saveContact');
Route::get('/about', 'App\Http\Controllers\pageController@about')->name('about');
Route::get('/services', 'App\Http\Controllers\pageController@services')->name('services');
Route::get('/departments', 'App\Http\Controllers\pageController@departments')->name('departments');
Route::get('/contact', 'App\Http\Controllers\pageController@contact')->name('contact');
Route::get('/departmentDetails', 'App\Http\Controllers\pageController@departmentDetails')->name('departmentDetails');
Route::get('/book', 'App\Http\Controllers\pageController@book')->name('book');
