<?php

use GuzzleHttp\Psr7\Request;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/message-update/{id}', 'App\Http\Controllers\ContactController@updateMessage')->name('message-update');
Route::get('/message/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('message-data-one');
Route::get('/messages', 'App\Http\Controllers\ContactController@allData')->name('messages-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::post('/message-update/{id}', 'App\Http\Controllers\ContactController@updateMessagePost')->name('message-update-post');
Route::get('/message-delete/{id}', 'App\Http\Controllers\ContactController@deleteMessage')->name('message-delete');