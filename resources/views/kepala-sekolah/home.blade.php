@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body no-border">
                <h3>
                    <span class="">Beranda Kepala Sekolah</span>
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
                            <a href="{{ url(route('kepala-sekolah.data.data-diri-kepala-sekolah')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Diri Kepala Sekolah</a>
                            <a href="{{ url(route('kepala-sekolah.data.data-guru')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Data Guru</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="box box-solid box-primary flat">
                        <div class="box-header bg-light-blue-active"><h4>Sekolah</h4></div>
                        <div class="box-body bg-info">
                            <a href="{{ url(route('kepala-sekolah.sekolah.evaluasi-diri-sekolah')) }}" class="btn btn-primary btn-block btn-lg btn-flat">Evaluasi Diri Sekolah (EDS)</a>
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
