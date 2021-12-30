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
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">PHOTOGRAPHY</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Ketentuan lomba</h6>
                        <ol type="1">
                            <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                            <li>Setiap sekolah dapat mengirim lebih dari 1 peserta</li>
                            <li>Peserta wajib melampirkan berkas pendaftaran berupa :</li>
                            <ul>
                                <li>Formulir Pendaftaran (PDF)</li>
                                <li>Fotocopy kartu pelajar 1 lembar (PDF)</li>
                                <li>Dijadikan dalam 1 File dengan File Name : Nama Peserta_Asal Sekolah</li>
                            </ul>
                            <li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat Technical Meeting</li>
                            <li>Peserta yang sudah mendaftarkan diri, lalu mengundurkan diri maka biaya pendaftaran tidak dapat dikembalikan / hangus</li>
                            <li>Peserta wajib mematuhi peraturan yang ada</li>
                            <li>Keputusan yang diambil oleh panitia dan juri bersifat mutlak, tidak dapat diganggu gugat</li>
                        </ol>

                        <h6 class="fw-bold">Peraturan lomba</h6>
                        <ol>
                            <li>Foto yang diambil bertema <b>Manusia dan Teknologi</b></li>
                            <li>Hasil foto tidak boleh di edit sama sekali (foto asli)</li>
                            <li>Tidak boleh meniru hasil foto peserta lain</li>
                            <li>Tidak boleh menggunakan kamera smartphone, drone, action cam, dan web cam</li>
                            <li>Format foto menggunakan <b>.RAW</b></li>
                            <li>Kriteria penilaian foto adalah Angle, Komposisi, Originalitas, dan Moment</li>
                            <li>Peserta dapat menulis makna dari foto yang di ambil menggunakan Notepad dan dikumpulkan bersama hasil foto</li>
                            <li>Pengumpulan melalui link Google Drive yang akan di berikan oleh panitia</li>
                        </ol>

                        <h6 class="fw-bold">Jadwal lomba</h6>
                        <ul>
                            <li>12 Januari 2021 - 30 Januari 2021</li>
                        </ul>

                        <h6 class="fw-bold">Biaya lomba</h6>
                        <ul>
                            <li>50K per orang</li>
                        </ul>

                        <h6>Technical Meeting</h6>
                        <ul>
                            <li>Tanggal : Senin, 3 Januari 2022</li>
                            <li>Waktu   : 11.00 - 12.00 WIB</li>
                            <li>Tempat  : Daring</li>
                        </ul>

                        <h6>Contact Person</h6>
                        <ul>
                            <li>085959060987 (Haura)</li>
                            <li>081807779305 (Rifki)</li>
                        </ul>
                        <hr class="text-white">
                        <div class="py-3">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <span>Total Slot</span>
                                    <br>
                                    <span>11/20</span>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <span>Jenis lomba</span>
                                    <br>
                                    <span>Per orang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5 text-white" id="ketentuan" style="display: none">
                    <h6 class="fw-bold">Ketentuan lomba</h6>
                    <ol type="1">
                        <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                        <li>Setiap sekolah dapat mengirim lebih dari 1 peserta</li>
                        <li>Peserta wajib melampirkan berkas pendaftaran berupa :</li>
                        <ul>
                            <li>Formulir Pendaftaran (PDF)</li>
                            <li>Fotocopy kartu pelajar 1 lembar (PDF)</li>
                            <li>Dijadikan dalam 1 File dengan File Name : Nama Peserta_Asal Sekolah</li>
                        </ul>
                        <li>Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat Technical Meeting</li>
                        <li>Peserta yang sudah mendaftarkan diri, lalu mengundurkan diri maka biaya pendaftaran tidak dapat dikembalikan / hangus</li>
                        <li>Peserta wajib mematuhi peraturan yang ada</li>
                        <li>Keputusan yang diambil oleh panitia dan juri bersifat mutlak, tidak dapat diganggu gugat</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Peraturan lomba</h6>
                    <ol>
                        <li>Foto yang diambil bertema <b>Manusia dan Teknologi</b></li>
                        <li>Hasil foto tidak boleh di edit sama sekali (foto asli)</li>
                        <li>Tidak boleh meniru hasil foto peserta lain</li>
                        <li>Tidak boleh menggunakan kamera smartphone, drone, action cam, dan web cam</li>
                        <li>Format foto menggunakan <b>.RAW</b></li>
                        <li>Kriteria penilaian foto adalah Angle, Komposisi, Originalitas, dan Moment</li>
                        <li>Peserta dapat menulis makna dari foto yang di ambil menggunakan Notepad dan dikumpulkan bersama hasil foto</li>
                        <li>Pengumpulan melalui link Google Drive yang akan di berikan oleh panitia</li>
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
                        <input type="text" name="nama" class="border-input p-2 px-4 w-100" placeholder="Nama lengkap peserta" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" name="sekolah" class="border-input p-2 px-4 w-100" placeholder="Nama sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" class="border-input p-2 px-4 w-100" placeholder="Tempat, tanggal lahir peserta" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" name="jk" value="L" class="form-check-input" required>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jk" value="P" class="form-check-input" required>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="border-input p-2 px-4 w-100" placeholder="Email peserta" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">No Whatsapp Aktif</label>
                        <input type="text" name="nowa" class="border-input p-2 px-4 w-100" placeholder="Nomor whatsapp peserta" required>
                    </div>

                    <button class="btn btn-login p-2 my-3 w-100 fw-bold">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection