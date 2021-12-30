@extends('Pages.Layout.Bootstrap')
@section('title', 'Daftar Lomba')
@section('content')

<div class="welcome">
    <div class="container">
        <div class="row row-lomba py-5 justify-content-center text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Cari lomba.." aria-label="Username" aria-describedby="basic-addon1" class="">
                    <span class="input-group-text cursor-pointer search-label" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('pubg') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/Logo PUBG Mobile.png') }}" alt="PUBG" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">PLAYER UNKNOWN'S BATTLEGROUND MOBILE</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('ff') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/Free_Fire_game_logo.png') }}" alt="FREE FIRE" width="100%">
                        <h3 class="text-center text-white pt-5" style="font-family: 'Odibee Sans', cursive;">FREE FIRE</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('ml') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/logo-mobile-legend-31251.png') }}" alt="MOBILE LEGEND" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">MOBILE LEGEND</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('foto') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/photography.png') }}" alt="PHOTOGRAPHY" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">PHOTOGRAPHY</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('poster') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/desain poster.png') }}" alt="DESAIN POSTER" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">DESAIN POSTER</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('musik') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/cover music.png') }}" alt="COVER MUSIC" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">COVER MUSIC</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 pt-5">
                <a href="{{ route('movie') }}" class="text-decoration-none">
                    <div class="card card-lmb">
                        <img src="{{ asset('img/short movie.png') }}" alt="SHORT MOVIE" width="100%">
                        <h3 class="text-center text-white" style="font-family: 'Odibee Sans', cursive;">SHORT MOVIE</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection