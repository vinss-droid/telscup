@extends('Pages.Layout.Bootstrap')
@section('title', 'Home')
@section('content')

<img src="{{ asset('img/BANNER TELSCUP.png') }}" alt="Banner TELSCUP" class="banner pt-3">

<div class="welcome">
    <div class="container">
        <h1 class="fw-bold text-center pt-5 text-white pt-cs-1">SELAMAT DATANG DI TELSCUP</h1>
        <center>
            <hr width="30%" class="pb-1 text-white">
        </center>
        <div class="row justify-content-center pt-3">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nobis
                    temporibus at atque incidunt eaque accusantium rerum sequi voluptatibus dolor ab, dignissimos quas
                    voluptatum nihil!
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/z_hckuC4WiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="row pt-5 pb-3 pt-cs-1" id="lomba">
            <h1 class="text-center text-white fw-bold">LOMBA E-SPORT</h1>
            <center>
                <hr width="15%" class="pb-1 text-white">
            </center>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-4">
                <img src="{{ asset('img/Logo PUBG Mobile.png') }}" alt="" width="100%">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <img src="{{ asset('img/logo-mobile-legend-31251.png') }}" alt="" width="100%">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <img src="{{ asset('img/Free_Fire_game_logo.png') }}" alt="" width="100%" class="pt-5">
            </div>
            {{-- <a href="{{ route('lomba') }}" class="text-decoration-none mt-4 dLomba btn">Lihat lomba lainnya !</a> --}}
            <a href="{{ route('lomba') }}" class="btn btn-masuk mx-auto w-auto">Lihat lomba lainnya</a>
        </div>
    </div>
    
    {{-- <hr class="m-3 mx-5 text-white opacity-100"> --}}
    
    <div class="cara-daftar pt-5 pb-4 pt-cs-1" id="cara-daftar">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center text-white fw-bold">CARA DAFTAR</h1>
                <center>
                    <hr width="15%" class="pb-1 text-white">
                </center>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/choice.svg') }}" alt="" width="50%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">1. Pilih lomba yang ingin kamu ikuti.</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/reading.svg') }}" alt="" width="50%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">2. Baca persyaratan lomba yang sudah tertera pada masing-masing lomba.</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/register.svg') }}" alt="" width="64%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">3. Daftarkan Dirimu dan Timmu pada lomba yang di pilih.</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/payment.svg') }}" alt="" width="56%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">4. Selesaikan Administrasi yang tertera.</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/terms.svg') }}" alt="" width="54%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">5. Terimakasih telah mendaftar !</h6>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 mb-5">
                    <center>
                        <img src="{{ asset('img/update1.svg') }}" alt="" width="56%" class="pb-3">
                    </center>
                    <h6 class="text-white text-center">6. Tunggu Info Selanjutnya yahh !</h6>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection