<?php

Route::get('/', 'GuruController@index')->name('guru.index');

Route::group(['prefix' => 'data'], function (){
	
	Route::get('/', 'GuruController@indexData')->name('guru.data.index');
	Route::get('/data-diri-guru', 'GuruController@indexDataDataDiriGuru')->name('guru.data.data-diri-guru');
});

Route::group(['prefix' => 'buku-kerja'], function (){
	
	Route::get('/', 'GuruController@indexBukuKerja')->name('guru.buku-kerja.index');
	Route::get('/buku-kerja-1', 'GuruController@indexBukuKerjaBukuKerja1')->name('guru.buku-kerja.buku-kerja-1');
	Route::get('/buku-kerja-2', 'GuruController@indexBukuKerjaBukuKerja2')->name('guru.buku-kerja.buku-kerja-2');
	Route::get('/buku-kerja-3', 'GuruController@indexBukuKerjaBukuKerja3')->name('guru.buku-kerja.buku-kerja-3');
	Route::get('/buku-kerja-4', 'GuruController@indexBukuKerjaBukuKerja4')->name('guru.buku-kerja.buku-kerja-4');
});