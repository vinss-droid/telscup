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
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">COVER MUSIC</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Ketentuan lomba</h6>
                        <ol type="1">
                            <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                            <li>Peserta dapat mendaftarkan diri dalam bentuk solo atau kelompok atau band beranggotakan 5-7 orang</li>
                            <li>Peserta mendaftarkan diri tanggal 12 - 30 Desember 2021</li>
                            <li>Apabila peserta sudah mendaftar lomba maka panitia akan memberikan syarat dan ketentuan lomba nya</li>
                            <li>Peserta wajib mengikuti Technical Meeting untuk membahas peraturan lomba</li>
                            <li>Peserta lomba yang sudah mendaftarkan diri lalu mengundurkan diri, maka biaya pendaftaran tidak dapat dikembalikan/hangus</li>
                            <li>Perlombaan dimulai setelah technical meeting</li>
                            <li>Setiap peserta mengunggah di Youtube hanya 1 video cover lagu</li>
                        </ol>

                        <h6 class="fw-bold">Peraturan lomba</h6>
                        <ol>
                            <li>Setiap peserta diberikan kesempatan membawakan <b>Lagu Bebas</b></li>
                            <li>Durasi video cover maksimal 10 menit</li>
                            <li>Tidak boleh lipsync</li>
                            <li>Tidak diperkenankan mengedit hingga mengubah suara asli peserta</li>
                            <li>Olahan video diperkenankan sebatas edit kejelasan video, pencahayaan</li>
                            <li>Peserta dibolehkan menggunakan alat music tambahan ataupun tidak</li>
                            <li>Karya direkam dengan alat perekam apapun (handycam, SLR, smartphone, dll) dengan ketentuan hasil rekaman video baik, tidak kabur, pencahayaan baik dan suara jelas</li>
                            <li>Video harus bersifat orisinal tidak plagiasi dan belum pernah dilombakan sebelumnya</li>
                            <li>Para peserta harus menaati peraturan yang telah ditetapkan oleh panitia Lomba</li>
                            <li>Karya video cover Musik harus mencamtumkan :</li>
                            <ul>
                                <li>Judul lagu dan nama peserta/Band</li>
                                <li>Cover diunggah paling lambat 14 Januari 2022 </li>
                                <li>Semua hasil karya yang telah didaftarkan menjadi hak milik panitia. Panitia berhak menggunakan karya tersebut untuk kepentingan panitia dengan tetap mencantumkan kredit pengunggah video cover</li>
                                <li>Keputusan dewan juri bersifat mutlak dan tidak dapat di ganggu gugat</li>
                            </ul>
                            <li>Kriteria Penilaian Cover Musik :</li>
                            <ul>
                                <li>Teknik</li>
                                <ol type="a">
                                    <li>Vocal</li>
                                    <li>Intonasi</li>
                                </ol>

                                <li>Interpretasi</li>
                                <ol type="a">
                                    <li>Keselarasan musik dan lagu</li>
                                    <li>Dinamika</li>
                                    <li>Aransemen</li>
                                </ol>

                                <li>Performance</li>
                                <ol type="a">
                                    <li>Penguasaan panggung</li>
                                    <li>Kostum / busana</li>
                                </ol>
                            </ul>
                        </ol>

                        <h6 class="fw-bold">Jadwal lomba</h6>
                        <ul>
                            <li>12 Januari 2021 - 30 Januari 2021</li>
                        </ul>

                        <h6 class="fw-bold">Biaya lomba</h6>
                        <ul>
                            <li>35K per orang atau tim</li>
                        </ul>

                        <h6>Technical Meeting</h6>
                        <ul>
                            <li>Tanggal : Sabtu, 15 Januari 2022</li>
                            <li>Waktu   : 13.00 - 14.00 WIB</li>
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
                                    <span>11/20</span>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <span>Jenis lomba</span>
                                    <br>
                                    <span>Per orang atau tim</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-5 text-white" id="ketentuan" style="display: none">
                    <h6 class="fw-bold">Ketentuan lomba</h6>
                    <ol type="1">
                        <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                        <li>Peserta dapat mendaftarkan diri dalam bentuk solo atau kelompok atau band beranggotakan 5-7 orang</li>
                        <li>Peserta mendaftarkan diri tanggal 12 - 30 Desember 2021</li>
                        <li>Apabila peserta sudah mendaftar lomba maka panitia akan memberikan syarat dan ketentuan lomba nya</li>
                        <li>Peserta wajib mengikuti Technical Meeting untuk membahas peraturan lomba</li>
                        <li>Peserta lomba yang sudah mendaftarkan diri lalu mengundurkan diri, maka biaya pendaftaran tidak dapat dikembalikan/hangus</li>
                        <li>Perlombaan dimulai setelah technical meeting</li>
                        <li>Setiap peserta mengunggah di Youtube hanya 1 video cover lagu</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Peraturan lomba</h6>
                    <ol>
                        <li>Setiap peserta diberikan kesempatan membawakan <b>Lagu Bebas</b></li>
                        <li>Durasi video cover maksimal 10 menit</li>
                        <li>Tidak boleh lipsync</li>
                        <li>Tidak diperkenankan mengedit hingga mengubah suara asli peserta</li>
                        <li>Olahan video diperkenankan sebatas edit kejelasan video, pencahayaan</li>
                        <li>Peserta dibolehkan menggunakan alat music tambahan ataupun tidak</li>
                        <li>Karya direkam dengan alat perekam apapun (handycam, SLR, smartphone, dll) dengan ketentuan hasil rekaman video baik, tidak kabur, pencahayaan baik dan suara jelas</li>
                        <li>Video harus bersifat orisinal tidak plagiasi dan belum pernah dilombakan sebelumnya</li>
                        <li>Para peserta harus menaati peraturan yang telah ditetapkan oleh panitia Lomba</li>
                        <li>Karya video cover Musik harus mencamtumkan :</li>
                        <ul>
                            <li>Judul lagu dan nama peserta/Band</li>
                            <li>Cover diunggah paling lambat 14 Januari 2022 </li>
                            <li>Semua hasil karya yang telah didaftarkan menjadi hak milik panitia. Panitia berhak menggunakan karya tersebut untuk kepentingan panitia dengan tetap mencantumkan kredit pengunggah video cover</li>
                            <li>Keputusan dewan juri bersifat mutlak dan tidak dapat di ganggu gugat</li>
                        </ul>
                        <li>Kriteria Penilaian Cover Musik :</li>
                        <ul>
                            <li>Teknik</li>
                            <ol type="a">
                                <li>Vocal</li>
                                <li>Intonasi</li>
                            </ol>

                            <li>Interpretasi</li>
                            <ol type="a">
                                <li>Keselarasan musik dan lagu</li>
                                <li>Dinamika</li>
                                <li>Aransemen</li>
                            </ol>

                            <li>Performance</li>
                            <ol type="a">
                                <li>Penguasaan panggung</li>
                                <li>Kostum / busana</li>
                            </ol>
                        </ul>
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

                <span class="text-white px-3">Daftar Sebagai : <span id="kriteria">Solo</span></span>
                <div class="col-md-12 text-center py-3">
                    <a href="#daftarsolo" class="btn btn-daftar col-md-6 disabled" id="btnsolo" onclick="daftarsolo()">Solo</a>
                    <a href="#daftarkelompok" class="btn btn-daftar col-md-6" id="btnkelompok" onclick="daftarkelompok()">Kelompok/Band</a>
                    {{-- <button class="btn btn-daftar col-md-6" onclick="daftar()">Solo</button> --}}
                    {{-- <button class="btn btn-daftar col-md-6" onclick="daftar()">Kelompok/Band</button> --}}
                </div>

                {{--  --}}
                {{-- FORM UNTUK DAFTAR PERORANG --}}
                {{--  --}}

                <form action="" method="post" class="text-white" id="solo" style="display: block">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" name="sekolah" class="border-input p-2 px-4 w-100" placeholder="Nama sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="border-input p-2 px-4 w-100" placeholder="Nama lengkap peserta" required>
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

                {{--  --}}
                {{-- FORM UNTUK DAFTAR KELOMPOK --}}
                {{--  --}}

                <form action="" method="post" class="text-white" id="kelompok" style="display: none">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" name="sekolah" class="border-input p-2 px-4 w-100" placeholder="Nama sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Kelompok / Band</label>
                        <input type="text" name="nama_kelompok" class="border-input p-2 px-4 w-100" placeholder="Nama kelompok / band" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 1</label>
                        <input type="text" name="anggota1" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 2</label>
                        <input type="text" name="anggota2" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 2" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 3</label>
                        <input type="text" name="anggota3" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 3" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 4</label>
                        <input type="text" name="anggota4" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 4" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 5</label>
                        <input type="text" name="anggota5" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 5" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 6 (Opsional)</label>
                        <input type="text" name="anggota6" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 6">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Anggota 7 (Opsional)</label>
                        <input type="text" name="anggota7" class="border-input p-2 px-4 w-100" placeholder="Nama anggota 7">
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