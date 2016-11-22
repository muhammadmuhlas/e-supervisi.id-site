@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body no-border">
                <h3>
                    <span class="">Beranda Guru</span>
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
                        <div class="box-header bg-light-blue-active"><h4>Data</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('guru.data.data-diri-guru')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Diri Guru</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Buku Kerja</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('guru.buku-kerja.buku-kerja-1')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Buku Kerja 1 - (4 Elemen)</a>
                            <a href="{{ url(route('guru.buku-kerja.buku-kerja-2')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Buku Kerja 2 - (5 Elemen)</a>
                            <a href="{{ url(route('guru.buku-kerja.buku-kerja-3')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Buku Kerja 3 - (13 Elemen)</a>
                            <a href="{{ url(route('guru.buku-kerja.buku-kerja-4')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Buku Kerja 4 - (2 Elemen)</a>
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
