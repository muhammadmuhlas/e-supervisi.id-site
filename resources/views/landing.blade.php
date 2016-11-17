@extends('layouts.app')

@section('title')
    Landing Page
@endsection

@section('content')
    <div class="row hidden-xs hidden-sm" style="padding-top: 10%"></div>
    <div class="row hidden-md hidden-lg" style="padding-top: 10%"></div>
    <div class="row">
        <div class="col-md-4 col-sm-2 "></div>
        <div class="col-md-4 col-sm-8">
            <div class="box box-solid">
                <div class="box-header with-border text-center text-bold">
                    <h3 class="box-title">Selamat Datang, <span class="hidden-md hidden-lg"><br></span>{{ \Illuminate\Support\Str::title(Auth::user()->name) }}</h3>
                </div>
                <div class="box-body clearfix text-center">
                    <span class="text-justify">
                        <p>Anda, <b>{{ \Illuminate\Support\Str::title(Auth::user()->name) }}</b> dengan Email <b>{{ Auth::user()->email}}</b>, dan Username <b>{{ Auth::user()->username }}</b>, telah terdaftar di <b>E-Supervisi</b>. <br>Untuk melanjutkan silakan tekan tombol dibawah ini</p>
                    </span>
                    @foreach($redirects as $redirect)
                        {!! $redirect !!}
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-2"></div>
    </div>
@endsection
