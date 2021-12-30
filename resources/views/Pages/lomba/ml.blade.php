@extends('Pages.Layout.Bootstrap')
@section('title', 'Daftar Lomba')
@section('content')

<div class="welcome">
    <div class="container">
        <div class="row row-lomba py-5 justify-content-center">
            <h1 class="text-center text-white pt-5" style="font-family: 'Odibee Sans', cursive;">MOBILE LEGEND</h1>
            
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 pt-5">
                        <h4 class="text-center w-100 text-white">
                            <img src="{{ asset('img/logo-mobile-legend-31251.png') }}" alt="PUBG" width="100%">
                        </h4>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 pt-5">
                        <h4 class="text-white fs-5 opacity-75" style="text-align: justify">Mobile Legends merupakan game MOBA (Multiplayer Online Battle Arena) yang dimainkan oleh 5 pemain dalam 1 tim. Setiap pemain mempunyai tugas sendiri-sendiri yang bertujuan untuk memenangkan pemainan. Setiap pemain harus mengetahui dan menguasai role beserta hero yang digunakan untuk dapat mengalahkan tim lawan.
                        <br>
                        <br>
                        <b>TELSCUP</b> sedang mengadakan kompetisi dan membuka pendaftaran untuk lomba <b>Mobile Legend : Bang Bang</b>. 
                        <br>
                        <br>
                        <table>
                            <tr>
                                <td class="col-md-5">KETENTUAN LOMBA</td>
                                <td class="col-md-1">:</td>
                                <td class="col-md-6">Pemain merupakan Pelajar Sederajat (SMP/MTS & SMA/SMK/MA)</td>
                            </tr>
                            <tr>
                                <td class="col-md-5">BIAYA PENDAFTARAN</td>
                                <td class="col-md-1">:</td>
                                <td class="col-md-6">100K per TIM</td>
                            </tr>
                            <tr>
                                <td class="col-md-5">OPEN REGISTRATION</td>
                                <td class="col-md-1">:</td>
                                <td class="col-md-6">12 DESEMBER 2021 - 30 DESEMBER 2021</td>
                            </tr>
                        </table>
                        
                        <br> 
                        Ayo daftarkan tim mu sekarang dan jangan ketinggalan info terbaru dari kami. <a href="https://instagram.com/telesandi.festival/" class="text-white opacity-50 link">More Info!</a>
                        </h4>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3 pt-5">
                        <h4 class="text-center w-100 text-white">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>6</span>
                                    <br>
                                    <h6 class="w-100">Jumlah Pendaftar</h6>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <span>10</span>
                                    <br>
                                    <h6 class="w-100">Sisa Slot</h6>
                                </div>
                            </div>
                            <a href="{{ route('pendaftaran_ml') }}" class="btn w-100 mt-3 btn-masuk">Daftar Sekarang</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection