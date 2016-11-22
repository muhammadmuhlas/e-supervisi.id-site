<?php

Route::get('/', 'AdministratorController@index')->name('administrator.index');

Route::group(['prefix' => 'input-data'], function (){
	
	Route::get('/', 'AdministratorController@indexInputData')->name('administrator.input-data.index');
	Route::get('/guru', 'AdministratorController@indexInputDataGuru')->name('administrator.input-data.guru');
	Route::get('/kepala-sekolah', 'AdministratorController@indexInputDataKepalaSekolah')->name('administrator.input-data.kepala-sekolah');
	Route::get('/operator-sekolah', 'AdministratorController@indexInputDataOperatorSekolah')->name('administrator.input-data.operator-sekolah');
	Route::get('/pengawas-sekolah', 'AdministratorController@indexInputDataPengawasSekolah')->name('administrator.input-data.pengawas-sekolah');
});

Route::group(['prefix' => 'kontrol-data'], function (){
	
	Route::get('/', 'AdministratorController@indexKontrolData')->name('administrator.kontrol-data.index');
	Route::get('/guru', 'AdministratorController@indexKontrolDataGuru')->name('administrator.kontrol-data.guru');
	Route::get('/kepala-sekolah', 'AdministratorController@indexKontrolDataKepalaSekolah')->name('administrator.kontrol-data.kepala-sekolah');
	Route::get('/operator-sekolah', 'AdministratorController@indexKontrolDataOperatorSekolah')->name('administrator.kontrol-data.operator-sekolah');
	Route::get('/pengawas-sekolah', 'AdministratorController@indexKontrolDataPengawasSekolah')->name('administrator.kontrol-data.pengawas-sekolah');
});