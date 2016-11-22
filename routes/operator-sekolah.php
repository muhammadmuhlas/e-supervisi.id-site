<?php

Route::get('/', 'OperatorSekolahController@index')->name('operator-sekolah.index');

Route::group(['prefix' => 'data-guru-dan-mata-pelajaran'], function (){
	
	Route::get('/', 'OperatorSekolahController@indexDataGuruDanMataPelajaran')->name('operator-sekolah.data-guru-dan-data-mata-pelajran.data.index');
	Route::get('/data-guru', 'OperatorSekolahController@indexDataGuruDanMataPelajaranDataGuru')->name('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-guru');
	Route::get('/data-mata-pelajaran', 'OperatorSekolahController@indexDataGuruDanMataPelajaranMataPelajaran')->name('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-mata-pelajaran');
});

Route::group(['prefix' => 'data-kelas-dan-data-siswa'], function (){
	
	Route::get('/', 'OperatorSekolahController@indexDataKelasDanDataSiswa')->name('operator-sekolah.data-kelas-dan-data-siswa.index');
	Route::get('/data-kelas', 'OperatorSekolahController@indexDataKelasDanDataSiswaDataKelas')->name('operator-sekolah.data-kelas-dan-data-siswa.data-kelas');
	Route::get('/data-siswa', 'OperatorSekolahController@indexDataKelasDanDataSiswaDataSiswa')->name('operator-sekolah.data-kelas-dan-data-siswa.data-siswa');
});

Route::group(['prefix' => 'data-sekolah-dan-data-sarpras'], function (){
	
	Route::get('/', 'OperatorSekolahController@indexDataSekolahDanDataSarpras')->name('operator-sekolah.data--dansekolah-data-.datsarprasa.index');
	Route::get('/data-sekolah', 'OperatorSekolahController@indexDataSekolahDanDataSarprasDataSekolah')->name('operator-sekolah.data-sekolah-dan-data-sarpras.data-sekolah');
	Route::get('/data-sarpras', 'OperatorSekolahController@indexDataSekolahDanDataSarprasDataSarpras')->name('operator-sekolah.data-sekolah-dan-data-sarpras.data-sarpras');
});