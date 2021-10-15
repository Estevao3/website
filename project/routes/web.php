<?php

Route::get('/', 'WebController@home')->name('home');
Route::get('/curso', 'WebController@course')->name('course');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog/{uri}', 'WebController@single')->name('single');
Route::get('/contato', 'WebController@contact')->name('contact');

Route::post('/send-mail', 'WebController@sendmail')->name('send-mail');
