<?php

Route::get('/', function () {
	$users[] = Auth::user();
	$users[] = Auth::guard()->user();
	
	dd($users);
});