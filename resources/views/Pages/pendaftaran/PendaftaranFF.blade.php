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
                        <a class="nav-link text-white" id="nav_bracket" onclick="nav_bracket()" href="#nav-bracket">Bracket</a>
                    </li>
                </ul>

                <div class="content py-3 text-white" id="detail" style="display: block">
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">FREE FIRE</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Persyaratan Pemain</h6>
                        <ol type="1">
                            <li>Setiap pemain wajib memiliki device berupa smartphone/iphone (no emulator) serta akun Free Fire sendiri dan bukan milik orang lain</li>
                            <li>Setiap pemain harus sudah terdaftar di website <a href="#" class="text-white fw-bold">Telesandi Festival</a> formulir yang telah di sediakan.</li>
                            <li>Pemain yang tidak terdaftar namun mengikuti pertandingan maka akan di kick</li>
                            <li>Nickname tidak mengandung unsur pornografi, politik, dan sara</li>
                            <li>Jika sudah mendaftar dilarang mengganti nickname sampai tournament ini selesai</li>
                            <li>Setiap pemain memiliki kuota internet sendiri (pihak penyelengara tidak menyediakan akses internet)</li>
                            <li>Tidak boleh menggunakan program ilegal, cheat, bug, teaming</li>
                        </ol>

                        <h6 class="fw-bold">Persyaratan Tim</h6>
                        <ol>
                            <li>Satu tim terdiri dari 4 pemain dan 1 cadangan</li>
                            <li>Untuk nama tim bebas (tidak mengandung unsur pornografi, politik, dan sara) dan sertakan perwakilan nama sekolah nya masing masing</li>
                            <li>Multi slot tidak diperbolehkan</li>
                        </ol>

                        <h6 class="fw-bold">Format Tournament</h6>
                        <ol>
                            <li>Tournament online ini bersifat <b><i>fast tournament</i></b></li>
                            <li>Menggunakan 5 <b><i>Match</i></b> ( <b><i>Match</i></b> 1 Bermuda Erangel, <b><i>Match</i></b> 2 Purgatory, <b><i>Match</i></b> 3 Kalahari, <b><i>Match</i></b> 4 Bermuda, <b><i>Match</i></b> 5 Purgatory).</li>
                            <li>Tournament online ini menggunakan sistem point</li>
                            <li>Pertandingan akan dilaksanakan secara online hingga pertandingan selesai</li>
                            <li>Pertandingan akan disiarkan secara live streaming di akun youtube <a href="https://www.youtube.com/channel/UCH8M6QWatoIzrc-iUm9q-LA" target="_blank" class="text-white fw-bold">Telesandi Festival</a></li>
                        </ol>

                        <h6 class="fw-bold">Pengaturan Pertandingan</h6>
                        <ol>
                            <li><b><i>Room</i></b> akan dibuat oleh panitia</li>
                            <li>Pindah pindah saat di room bisa berakibat dapat di kick oleh panitia</li>
                            <li>Masuk room satu per satu = kick, jangan protes kalo dikick. <br>Setelah dikick, semua player out room, lalu langsung masuk per-team agar bisa kembali masuk ke room lagi.</li>
                            <li>Setiap player wajib mengirimkan bukti screenshot (4 <b><i>player</i></b>) saat awal pertandingan (zona 1) berlangsung dan mengirimkan 1 screenshot hasil pertandingan</li>
                        </ol>

                        <h6 class="fw-bold">Sistem Pertandingan</h6>
                        <ol>
                            <li><b><i>Match mode</i></b> menggunakan <b><i>Ticket room</i></b> yang dibuat oleh pihak panitia</li>
                            <li>Diperbolehkan menggunakan skin</li>
                            <li>Mic <b><i>All</i></b> tidak diperbolehkan kecuali mic <b><i>team</i></b></li>
                            <li>Dilarang <b><i>bug glowall</i></b> (-20)</li>
                            <ul>
                                <li>Dilarang mendorong musuh keluar dari soffa menggunakan <b><i>glow wall</i></b></li>
                                <li>Menutup akses dengan menembus objek dari lantai 1 ke lantai 2 dan berikutnya</li>
                                <li>Menggunakan glow wall untuk mendorong rekan atau musuh masuk kedalam objek yang tidak biasa di jangkau</li>
                            </ul>
                            <li>Sistem point menggunakan sistem point Master League S11</li>
                            <li>Cheat, bug, aliansi = diskualifikasi</li>
                            <li><b><i>Double kar</i></b> boleh</li>
                            <li><b><i>Double vector</i></b> boleh</li>
                            <li>Perkara <b><i>point</i></b> seri <br>
                                Jumlah <b><i>point</i></b> yang sama akan di tentukan berdasarkan jumlah <b><i>kill</i></b> terbanyak dalam satu <b><i>team</i></b>, jika masih sama maka ditentukan <b><i>placement match</i></b> akhir (keputusan panitia bersifat mutlak, tidak dapat diganggu gugat, dan sewaktu waktu dapat berubah)</li>
                            <li>Apabila game mengalami <b><i>disconnect</i></b> atau permasalahan koneksi itu tanggung jawab pemain (no rematch)</li>
                            <li>Setiap tim yang akan bertanding memiliki waktu dispensasi maksimal 10 menit, jika lebih dari itu maka pertandingan akan langsung di mulai</li>
                        </ol>

                        <h6 class="fw-bold">Jadwal Pertandingan</h6>
                        <ul>
                            <li>8 Januari 2022 : Match 1, 2, 3, 4, dan 5</li>
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
                    <h6 class="fw-bold">Persyaratan Pemain</h6>
                    <ol type="1">
                        <li>Setiap pemain wajib memiliki device berupa smartphone/iphone (no emulator) serta akun Free Fire sendiri dan bukan milik orang lain</li>
                        <li>Setiap pemain harus sudah terdaftar di website <a href="#" class="text-white fw-bold">Telesandi Festival</a> formulir yang telah di sediakan.</li>
                        <li>Pemain yang tidak terdaftar namun mengikuti pertandingan maka akan di kick</li>
                        <li>Nickname tidak mengandung unsur pornografi, politik, dan sara</li>
                        <li>Jika sudah mendaftar dilarang mengganti nickname sampai tournament ini selesai</li>
                        <li>Setiap pemain memiliki kuota internet sendiri (pihak penyelengara tidak menyediakan akses internet)</li>
                        <li>Tidak boleh menggunakan program ilegal, cheat, bug, teaming</li>
                    </ol>

                    <h6 class="fw-bold">Persyaratan Tim</h6>
                    <ol>
                        <li>Satu tim terdiri dari 4 pemain dan 1 cadangan</li>
                        <li>Untuk nama tim bebas (tidak mengandung unsur pornografi, politik, dan sara) dan sertakan perwakilan nama sekolah nya masing masing</li>
                        <li>Multi slot tidak diperbolehkan</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Format Tournament</h6>
                    <ol>
                        <li>Tournament online ini bersifat <b><i>fast tournament</i></b></li>
                        <li>Menggunakan 5 <b><i>Match</i></b> ( <b><i>Match</i></b> 1 Bermuda Erangel, <b><i>Match</i></b> 2 Purgatory, <b><i>Match</i></b> 3 Kalahari, <b><i>Match</i></b> 4 Bermuda, <b><i>Match</i></b> 5 Purgatory).</li>
                        <li>Tournament online ini menggunakan sistem point</li>
                        <li>Pertandingan akan dilaksanakan secara online hingga pertandingan selesai</li>
                        <li>Pertandingan akan disiarkan secara live streaming di akun youtube <a href="https://www.youtube.com/channel/UCH8M6QWatoIzrc-iUm9q-LA" target="_blank" class="text-white fw-bold">Telesandi Festival</a></li>
                    </ol>

                    <h6 class="fw-bold">Pengaturan Pertandingan</h6>
                    <ol>
                        <li><b><i>Room</i></b> akan dibuat oleh panitia</li>
                        <li>Pindah pindah saat di room bisa berakibat dapat di kick oleh panitia</li>
                        <li>Masuk room satu per satu = kick, jangan protes kalo dikick. <br>Setelah dikick, semua player out room, lalu langsung masuk per-team agar bisa kembali masuk ke room lagi.</li>
                        <li>Setiap player wajib mengirimkan bukti screenshot (4 <b><i>player</i></b>) saat awal pertandingan (zona 1) berlangsung dan mengirimkan 1 screenshot hasil pertandingan</li>
                    </ol>

                    <h6 class="fw-bold">Sistem Pertandingan</h6>
                    <ol>
                        <li><b><i>Match mode</i></b> menggunakan <b><i>Ticket room</i></b> yang dibuat oleh pihak panitia</li>
                        <li>Diperbolehkan menggunakan skin</li>
                        <li>Mic <b><i>All</i></b> tidak diperbolehkan kecuali mic <b><i>team</i></b></li>
                        <li>Dilarang <b><i>bug glowall</i></b> (-20)</li>
                        <ul>
                            <li>Dilarang mendorong musuh keluar dari soffa menggunakan <b><i>glow wall</i></b></li>
                            <li>Menutup akses dengan menembus objek dari lantai 1 ke lantai 2 dan berikutnya</li>
                            <li>Menggunakan glow wall untuk mendorong rekan atau musuh masuk kedalam objek yang tidak biasa di jangkau</li>
                        </ul>
                        <li>Sistem point menggunakan sistem point Master League S11</li>
                        <li>Cheat, bug, aliansi = diskualifikasi</li>
                        <li><b><i>Double kar</i></b> boleh</li>
                        <li><b><i>Double vector</i></b> boleh</li>
                        <li>Perkara <b><i>point</i></b> seri <br>
                            Jumlah <b><i>point</i></b> yang sama akan di tentukan berdasarkan jumlah <b><i>kill</i></b> terbanyak dalam satu <b><i>team</i></b>, jika masih sama maka ditentukan <b><i>placement match</i></b> akhir (keputusan panitia bersifat mutlak, tidak dapat diganggu gugat, dan sewaktu waktu dapat berubah)</li>
                        <li>Apabila game mengalami <b><i>disconnect</i></b> atau permasalahan koneksi itu tanggung jawab pemain (no rematch)</li>
                        <li>Setiap tim yang akan bertanding memiliki waktu dispensasi maksimal 10 menit, jika lebih dari itu maka pertandingan akan langsung di mulai</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="jadwal" style="display: none">
                    <h6 class="fw-bold">Jadwal Pertandingan</h6>
                    <ul>
                        <li>8 Januari 2022 : Match 1, 2, 3, 4, dan 5</li>
                    </ul>
                </div>
                
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
                        <input type="text" name="nama" class="border-input p-2 px-4 w-100" placeholder="Nama lengkap pendaftar" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" name="sekolah" class="border-input p-2 px-4 w-100" placeholder="Nama sekolah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">No Whatsapp Aktif</label>
                        <input type="text" name="nowa" class="border-input p-2 px-4 w-100" placeholder="Nomor whatsapp pendaftar" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 1 (leader)</label>
                        <input type="text" name="player1" class="border-input p-2 px-4 w-100" placeholder="Nama player 1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 2</label>
                        <input type="text" name="player2" class="border-input p-2 px-4 w-100" placeholder="Nama player 2" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 3</label>
                        <input type="text" name="player3" class="border-input p-2 px-4 w-100" placeholder="Nama player 3" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 4</label>
                        <input type="text" name="player4" class="border-input p-2 px-4 w-100" placeholder="Nama player 4" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 5 (cadangan)</label>
                        <input type="text" name="player5" class="border-input p-2 px-4 w-100" placeholder="Nama player 5" required>
                    </div>

                    <button class="btn btn-login p-2 my-3 w-100 fw-bold">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection