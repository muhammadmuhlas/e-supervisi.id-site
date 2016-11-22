@extends('layouts.app')

@section('title')
    Selamat Datang
@endsection

@section('content')
    <div class="row text-center">
        <div class="box no-border">
            <div class="box-body clearfix">
                <h3>
                    Informasi Akun
                </h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-2 "></div>
        <div class="col-md-4 col-sm-8">
            <div class="box box-solid">
                <div class="box-body clearfix">
                   <span>
                        <h4 class="text-center text-bold">Selamat Bekerja</h4>
                        <p class="text-center">Anda terdaftar dengan
                            <br>Email : <b>{{ Auth::user()->email}}</b>
                            <br />
                            Username :<b>{{ Auth::user()->username }}</b>
                            <br />
                        </p>
                    </span>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            @foreach($redirects as $redirect)
                                @if($redirect->name == 'Logout')
                                    <p class="text-bold text-center text-bold">Anda tidak terdaftar di jenis akun apapun !</p>
                                    <a href="{{ url($redirect->url) }}" type="button" class="btn btn-danger btn-block flat"><span class="text-bold"> {{ $redirect->name }}</span></a>
                                @else
                                    <a href="{{ url($redirect->url) }}" type="button" class="btn btn-primary btn-block flat">Lanjut Sebagai <span class="text-bold"> {{ $redirect->name }}</span></a>
                                @endif
                            @endforeach
                                &nbsp;
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-2"></div>
    </div>
@endsection
