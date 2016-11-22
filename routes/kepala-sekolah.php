<?php

Route::get('/', 'KepalaSekolahController@index')->name('kepala-sekolah.index');

Route::group(['prefix' => 'data'], function (){
	
	Route::get('/', 'KepalaSekolahController@indexData')->name('kepala-sekolah.data.index');
	Route::get('/data-diri-kepala-sekolah', 'KepalaSekolahController@indexDataDataDiriKepalaSekolah')->name('kepala-sekolah.data.data-diri-kepala-sekolah');
	Route::get('/data-guru', 'KepalaSekolahController@indexDataDataGuru')->name('kepala-sekolah.data.data-guru');
});

Route::group(['prefix' => 'sekolah'], function (){
	
	Route::get('/', 'KepalaSekolahController@indexSekolah')->name('kepala-sekolah.sekolah.index');
	Route::get('/evaluasi-diri-sekolah', 'KepalaSekolahController@indexSekolahEvaluasiDiriSekolah')->name('kepala-sekolah.sekolah.evaluasi-diri-sekolah');
});