<?php

Route::get('/', 'PengawasSekolahController@index');

Route::group(['prefix' => 'manajemen-data'], function (){
	
	Route::get('/', 'PengawasSekolahController@indexManajemenData')->name('pengawas-sekolah.manajemen-data.index');
	Route::get('/guru', 'PengawasSekolahController@indexManajemenDataGuru')->name('pengawas-sekolah.manajemen-data.guru');
	Route::get('/kepala-sekolah', 'PengawasSekolahController@indexManajemenDataKepalaSekolah')->name('pengawas-sekolah.manajemen-data.kepala-sekolah');
	Route::get('/pengawas', 'PengawasSekolahController@indexManajemenDataPengawas')->name('pengawas-sekolah.manajemen-data.pengawas');
	Route::get('/sekolah-binaan', 'PengawasSekolahController@indexManajemenDataSekolahBinaan')->name('pengawas-sekolah.manajemen-data.sekolah-binaan');
});

Route::group(['prefix' => 'instrumen-supervisi'], function (){
	
	Route::get('/', 'PengawasSekolahController@indexInstrumenSupervisi')->name('pengawas-sekolah.instrumen-supervisi.index');
	Route::get('/akademik', 'PengawasSekolahController@indexInstrumenSupervisiAkademik')->name('pengawas-sekolah.instrumen-supervisi.akademik');
	Route::get('/manajerial', 'PengawasSekolahController@indexInstrumenSupervisiManajerial')->name('pengawas-sekolah.instrumen-supervisi.manajerial');
});