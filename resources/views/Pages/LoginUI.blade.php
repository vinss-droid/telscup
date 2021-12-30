@extends('Pages.Layout.Login-bootstrap')
@section('title', 'Login')
@section('content')

<div class="welcome">
    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="p-5 justify-content-center">

                <a href="{{ route('home') }}" class="text-white fs-4 text-decoration-none fw-bold"><i class="fas fa-angle-left me-2"></i>Kembali</a>

                <div class="border-2 text-white mt-2">
                    <div class="p-5 pt-2" style="font-family: 'Montserrat', sans-serif;">
                        <center>
                            <img src="{{ asset('img/LOGO TELSCUP.png') }}" alt="Logo Telscup" width="30%" class="">
                        </center>
                        <div style="font-family: 'Montserrat', sans-serif;">
                            <h1 class="fw-bold fst-italic">HALAMAN MASUK</h1>
                            <div class="p-3">
                                <h6 class="opacity-50">Selamat datang, silahkan isi data diri untuk mendaftar atau masuk jika sudah memiliki akun.</h6>
                                <form action="" method="post" class="py-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Email</label>
                                            <input type="email" name="email" class="border-input p-2 px-4 w-100" placeholder="Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Password</label>
                                            <input type="password" name="password" class="border-input p-2 px-4 w-100" placeholder="Password" required>
                                        </div>
                                        <button class="btn btn-login p-2 my-3 w-100 fw-bold">Masuk</button>
                                    </div>
                                </form>
                                <div class="px-5">
                                    <div class="row">
                                        <div class="wall-section col-sm-12 col-md-4"><hr></div>
                                        <span class="col-sm-12 col-md-4 text-center">Belum memiliki akun?</span>
                                        <div class="wall-section col-sm-12 col-md-4"><hr></div>
                                    </div>
                                </div>
                                <a href="{{ route('regisui') }}" class="btn btn-daftar p-2 my-3 w-100 fw-bold">Daftar sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection