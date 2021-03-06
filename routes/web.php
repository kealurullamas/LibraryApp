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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','PagesController@index');
Route::get('/index','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/faq','PagesController@faqs')->name('faq');
Route::post('books/search','BooksController@search');
Route::resource('/books','BooksController');
Auth::routes();
Route::post('BookRequest/findAndStore','BookRequestsController@findAndStore');
Route::resource('BookRequest','BookRequestsController');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
route::post('/notification/get','NotificationController@get')->name('notify');
route::post('/notification/read','NotificationController@read')->name('read');
route::get('/notification/readAll','NotificationController@all')->name('all');
