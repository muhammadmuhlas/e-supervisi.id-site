<?php

Route::get('/', function () {
	$users[] = Auth::user();
	dd($users);
});