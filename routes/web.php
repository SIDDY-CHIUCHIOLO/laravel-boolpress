<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'Guest\HomeController@index')->name('home');

Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

Route::get('/contacts', 'Guest\ContactsController@contact')->name('guest.contact');
Route::post('/contacts', 'Guest\ContactsController@contactEmailStore')->name('guest.contactEmailStore');
Route::get('/thanks', 'Guest\ContactsController@thanks')->name('guest.thanks');

Route::get('/{any}', 'Guest\HomeController@index')->where('any','.*');
