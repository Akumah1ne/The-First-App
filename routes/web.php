<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/contact', 'HomeController@contact')->name('contact.index');
Route::get('/careers', 'HomeController@careers')->name('careers.index');
Route::get('/enroll', 'HomeController@enroll')->name('enroll.index');
Route::get('/absence', 'HomeController@absence')->name('absence.index');
Route::get('/calendars', 'HomeController@calendars')->name('calendars.index');