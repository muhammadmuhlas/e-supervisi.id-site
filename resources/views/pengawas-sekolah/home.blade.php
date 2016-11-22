@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body no-border">
                <h3>
                    <span class="">Beranda Pengawas Sekolah</span>
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
                <div class="col-md-2"></div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Manajemen Data</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('pengawas-sekolah.manajemen-data.pengawas')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Pengawas</a>
                            <a href="{{ url(route('pengawas-sekolah.manajemen-data.sekolah-binaan')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Sekolah Binaan</a>
                            <a href="{{ url(route('pengawas-sekolah.manajemen-data.kepala-sekolah')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Kepala Sekolah</a>
                            <a href="{{ url(route('pengawas-sekolah.manajemen-data.guru')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Guru</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Instrumen Supervisi</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('pengawas-sekolah.instrumen-supervisi.manajerial')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Manajerial</a>
                            <a href="{{ url(route('pengawas-sekolah.instrumen-supervisi.akademik')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Akademik</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection

@section('custom-js')
@endsection
