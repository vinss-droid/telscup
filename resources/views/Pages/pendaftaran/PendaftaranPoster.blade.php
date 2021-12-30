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
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">DESAIN POSTER</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Ketentuan lomba</h6>
                        <ol type="1">
                            <li>Pemain merupakan pelajar sederajat yaitu dari tingkat SMP/MTS dan SMA/SMK/MA</li>
                            <li>Peserta dipungut biaya pendaftaran sebesar Rp. 50.000</li>
                            <li>Peserta merupakan perorangan</li>
                            <li>Peserta wajib mengikuti <b><i>technical meeting</i></b> pada tanggal 3 Januari 2021 jam 12.00 - 13.00 WIB</li>
                            <li>Peserta hanya diperkenankan mengirim karya maksimal 2 buah poster (boleh 1 poster)</li>
                            <li>Peserta wajib memahami dan menyepakati seluruh syarat lomba seperti yang tercantum</li>
                        </ol>

                        <h6 class="fw-bold">Peraturan lomba</h6>
                        <ol>
                            <li>Tema Lomba “Dampak Teknologi ( <b>wajib</b> ) dan Bebas (untuk poster ke-2 <b>jika ada</b> )“</li>
                            <li>Karya adalah karya orisinil dan dapat dipertanggung jawabkan keasliannya</li>
                            <li>Karya yang dilombakan harus sesuai tema perlombaan dan memenuhi kriteria perlombaan</li>
                            <li>Desain dibuat menarik dan berwarna, jumlah warna tidak dibatasi</li>
                            <li>Desain poster menggunakan aplikasi umum (Corel draw, Adobe Photoshop, Adobe Illustrator)</li>
                            <li>Poster menggunakan kertas ukuran A3 tanpa garis tepi dengan format PNG</li>
                            <li>Karya hanya boleh menggunakan bahasa Indonesia dan bahasa Inggris</li>
                            <li>Karya poster tidak boleh mengandung unsur pornografi, SARA, sadisme atau hal-hal yang bersifat merendahkan atau melecehkan pihak lain</li>
                            <li>Karya poster belum pernah dipublikasikan dan belum pernah diikutkan pada kompetisi desain poster lainnya</li>
                            <li>Karya yang sudah dikirim menjadi hak milik panitia dan keputusan juri tidak dapat diganggu gugat</li>
                        </ol>

                        <h6 class="fw-bold">Syarat Pendaftaran</h6>
                        <ol>
                            <li>Pendaftaran dimulai pada 12 Desember sampai tanggal 30 Desember 2021</li>
                            <li>Tiap peserta boleh mengikutkan lebih dari satu karya (maksimal 2 poster)</li>
                            <li>Karya bisa dikirim melalui email : </li>
                            <ul>
                                <li>bintangmalik2704@gmail.com</li>
                                <li>mndshilvia@gmail.com</li>
                                <li>ravifatur04@gmail.com</li>
                            </ul>
                            <li>Bisa melakukan pembayaran melalui Rekening BRI dan e-Money (OVO, GOPAY, DANA). Biaya pendaftaran sebesar Rp. 50.000 (lima puluh ribu rupiah) <br> Bisa Melalui :</li>
                            <ul>
                                <li>Rekening BRI -- (037601014012507 A/N RENITA BASITHUTALA)</li>
                                <li>OVO, GOPAY, DANA -- (085732913685 A/N NADILA)</li>
                            </ul>
                            <li>Lampiran tanda pengenal peserta (Kartu Tanda Pelajar) dan scan bukti pembayaran</li>
                            <li>Setelah melakukan pentransferan, peserta langsung menghubungi panitia ke Shofi (081219345794) melalui Whatsapp dengan menyebutkan nama peserta, asal sekolah, jam transfer, bukti transfer, dan nomor HP</li>
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
                            <li>Waktu   : 12.00 - 13.00 WIB</li>
                            <li>Tempat  : Daring</li>
                        </ul>

                        <h6>Contact Person</h6>
                        <ul>
                            <li>081219345794 (Shofi)</li>
                            <li>0xxxxxxxxxxx (nama)</li>
                        </ul>
                        <hr class="text-white">
                        <div class="py-3">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <span>Total Slot</span>
                                    <br>
                                    <span>0/--</span>
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
                        <li>Peserta dipungut biaya pendaftaran sebesar Rp. 50.000</li>
                        <li>Peserta merupakan perorangan</li>
                        <li>Peserta wajib mengikuti <b><i>technical meeting</i></b> pada tanggal 3 Januari 2021 jam 12.00 - 13.00 WIB</li>
                        <li>Peserta hanya diperkenankan mengirim karya maksimal 2 buah poster (boleh 1 poster)</li>
                        <li>Peserta wajib memahami dan menyepakati seluruh syarat lomba seperti yang tercantum</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Peraturan lomba</h6>
                    <ol>
                        <li>Tema Lomba “Dampak Teknologi ( <b>wajib</b> ) dan Bebas (untuk poster ke-2 <b>jika ada</b> )“</li>
                        <li>Karya adalah karya orisinil dan dapat dipertanggung jawabkan keasliannya</li>
                        <li>Karya yang dilombakan harus sesuai tema perlombaan dan memenuhi kriteria perlombaan</li>
                        <li>Desain dibuat menarik dan berwarna, jumlah warna tidak dibatasi</li>
                        <li>Desain poster menggunakan aplikasi umum (Corel draw, Adobe Photoshop, Adobe Illustrator)</li>
                        <li>Poster menggunakan kertas ukuran A3 tanpa garis tepi dengan format PNG</li>
                        <li>Karya hanya boleh menggunakan bahasa Indonesia dan bahasa Inggris</li>
                        <li>Karya poster tidak boleh mengandung unsur pornografi, SARA, sadisme atau hal-hal yang bersifat merendahkan atau melecehkan pihak lain</li>
                        <li>Karya poster belum pernah dipublikasikan dan belum pernah diikutkan pada kompetisi desain poster lainnya</li>
                        <li>Karya yang sudah dikirim menjadi hak milik panitia dan keputusan juri tidak dapat diganggu gugat</li>
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