<?php

/*
 * Default Page when Site Accessed
 * */
Route::get('/', 'UserController@index');

/*
 * Show Landing Page, to Display Welcome Page and Switch User Type
 * */
Route::get('/landing', 'UserController@landing');

/*
 * Authentication
 * */
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::any('/logout', 'Auth\LoginController@logout');