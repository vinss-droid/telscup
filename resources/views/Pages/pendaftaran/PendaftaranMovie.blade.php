@extends('Pages.Layout.Bootstrap')
@section('title', 'Pendaftaran Lomba')
@section('content')

<div class="welcome">
    <div class="container pb-5">
        <div class="row pendaftaran">
            <div class="col-md-7 py-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active disabled" id="nav_detail" onclick="nav_detail()" href="">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav_ketentuan" onclick="nav_ketentuan()" href="#nav-ketentuan">Ketentuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav_peraturan" onclick="nav_peraturan()" href="#nav-peraturan">Peraturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav_jadwal" onclick="nav_jadwal()" href="#nav-jadwal">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="nav_peserta" onclick="nav_peserta()" href="#nav-peserta">Peserta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white d-none" id="nav_bracket" onclick="nav_bracket()" href="#nav-bracket">Bracket</a>
                    </li>
                </ul>

                <div class="content py-3 text-white" id="detail" style="display: block">
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">SHORT MOVIE</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Ketentuan lomba</h6>
                        <ol type="1">
                            <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                            <li>Satu sekolah boleh mengirimkan lebih dari 1 team</li>
                            <li>Pendaftaran dilakukan oleh masing-masing team</li>
                            <li>Wajib mempunyai surat keterangan dari sekolah (1 surat keterangan hanya untuk 1 team)</li>
                            <li>Dalam 1 team diisi oleh siswa/i dari 1 sekolah.</li>
                            <li>Regristrasi per team Rp. 100.000</li>
                        </ol>

                        <h6 class="fw-bold">Peraturan lomba</h6>
                        <ol>
                            <li>Film bertemakan <b>“MERDEKA BERSAMA TEKNOLOGI”</b></li>
                            <li>Durasi video minimal 2 menit dan maximal 5 menit</li>
                            <li>Minimal resolusi video adalah 720p</li>
                            <li>Format video berbentuk landscape (16:9)</li>
                            <li>Memakai logo sekolah masing-masing dan logo tels cup di opening video</li>
                            <li>Pengumpulan video via Google Drive</li>
                            <li>Jika menggunakan backsound elemen berhak cipta bukan tanggung jawab panitia</li>
                            <li>Jika memang menggunakan backsound elemen, diharap untuk disertakan pada credit film</li>
                        </ol>

                        <h6 class="fw-bold">Jadwal lomba</h6>
                        <ul>
                            <li>12 Januari 2021 - 30 Januari 2021</li>
                        </ul>

                        <h6 class="fw-bold">Biaya lomba</h6>
                        <ul>
                            <li>100K per tim</li>
                        </ul>

                        <h6>Technical Meeting</h6>
                        <ul>
                            <li>Tanggal : --- </li>
                            <li>Waktu   : --- WIB</li>
                            <li>Tempat  : Daring</li>
                        </ul>

                        <h6>Contact Person</h6>
                        <ul>
                            <li>0xxxxxxxxxxx (nama)</li>
                            <li>0xxxxxxxxxxx (nama)</li>
                        </ul>
                        <hr class="text-white">
                        <div class="py-3">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <span>Total Slot</span>
                                    <br>
                                    <span>11/--</span>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <span>Jenis lomba</span>
                                    <br>
                                    <span>Per tim</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5 text-white" id="ketentuan" style="display: none">
                    <h6 class="fw-bold">Ketentuan lomba</h6>
                    <ol type="1">
                        <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                        <li>Satu sekolah boleh mengirimkan lebih dari 1 team</li>
                        <li>Pendaftaran dilakukan oleh masing-masing team</li>
                        <li>Wajib mempunyai surat keterangan dari sekolah (1 surat keterangan hanya untuk 1 team)</li>
                        <li>Dalam 1 team diisi oleh siswa/i dari 1 sekolah.</li>
                        <li>Regristrasi per team Rp. 100.000</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Peraturan lomba</h6>
                    <ol>
                        <li>Film bertemakan <b>“MERDEKA BERSAMA TEKNOLOGI”</b></li>
                        <li>Durasi video minimal 2 menit dan maximal 5 menit</li>
                        <li>Minimal resolusi video adalah 720p</li>
                        <li>Format video berbentuk landscape (16:9)</li>
                        <li>Memakai logo sekolah masing-masing dan logo tels cup di opening video</li>
                        <li>Pengumpulan video via Google Drive</li>
                        <li>Jika menggunakan backsound elemen berhak cipta bukan tanggung jawab panitia</li>
                        <li>Jika memang menggunakan backsound elemen, diharap untuk disertakan pada credit film</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="jadwal" style="display: none">JADWAL PERLOMBAAN</div>
                
                <div class="py-5 text-white" id="peserta" style="display: none">PESERTA PERLOMBAAN</div>

                <div class="py-5 text-white" id="bracket" style="display: none">BRACKET PERLOMBAAN</div>

            </div>

            <div class="col-md-1"></div>
    
            <div class="col-md-4 py-5">
                <h2 class="text-white text-center">Pendaftaran Lomba</h2>
                <hr class="text-white mx-3">
                <form action="" method="post" class="justify-content-center text-white">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="border-input p-2 px-4 w-100" placeholder="Nama lengkap pendafar" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" name="sekolah" class="border-input p-2 px-4 w-100" placeholder="Nama sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="border-input p-2 px-4 w-100" placeholder="Email peserta" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">No Whatsapp Aktif</label>
                        <input type="text" name="nowa" class="border-input p-2 px-4 w-100" placeholder="Nomor whatsapp" required>
                    </div>

                    <button class="btn btn-login p-2 my-3 w-100 fw-bold">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection