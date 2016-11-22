@extends('layouts.app')

@section('title')
    Buku Kerja 4
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body no-border">
                <h3>
                    <span class="">Buku Kerja 4</span>
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
@endsection

@section('custom-js')
@endsection
