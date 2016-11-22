@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body no-border">
                <h3>
                    <span class="">Beranda Operator Sekolah</span>
                </h3>
                <br />
                <div class="btn-group">
                    <a href="{{ URL::previous() }}" type="button" class="btn bg-purple flat">
                        <i class="glyphicon glyphicon-arrow-left"></i> &nbsp;
                        Kembali
                    </a>
                    <a href="{{ url('/') }}" type="button" class="btn bg-purple flat">
                        <i class="glyphicon glyphicon-home"></i> &nbsp;
                        Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Data Sekolah & Data Sarpras</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('operator-sekolah.data-sekolah-dan-data-sarpras.data-sekolah')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Sekolah</a>
                            <a href="{{ url(route('operator-sekolah.data-sekolah-dan-data-sarpras.data-sarpras')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Sarpras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Data Kelas & Data Siswa</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('operator-sekolah.data-kelas-dan-data-siswa.data-kelas')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Kelas</a>
                            <a href="{{ url(route('operator-sekolah.data-kelas-dan-data-siswa.data-siswa')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Siswa</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Data Guru & Data Mata Pelajaran</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-guru')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Guru</a>
                            <a href="{{ url(route('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-mata-pelajaran')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Mata Pelajaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection

@section('custom-js')
@endsection
