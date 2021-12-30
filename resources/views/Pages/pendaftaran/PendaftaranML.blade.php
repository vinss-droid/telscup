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
                    <h2 class="text-center pb-2 title" style="font-family: 'Odibee Sans', cursive;">MOBILE LEGEND</h2>
                    
                    <div class="detail">
                        <h6 class="fw-bold">Persyaratan Pemain</h6>
                        <ol type="1">
                            <li>Setiap pemain wajib memiliki device berupa smartphone/iphone (no emulator) serta akun Mobile Legends sendiri dan bukan milik orang lain</li>
                            <li>Setiap pemain harus sudah terdaftar di website <a href="#" class="text-white fw-bold">Telesandi Festival</a> formulir yang telah di sediakan.</li>
                            <li>Pemain yang tidak terdaftar namun mengikuti pertandingan maka akan di diskualifikasi</li>
                            <li>Nickname tidak mengandung unsur pornografi, politik, dan sara</li>
                            <li>Jika sudah mendaftar dilarang mengganti nickname sampai tournament ini selesai</li>
                            <li>Setiap pemain memiliki kuota internet sendiri (pihak penyelengara tidak menyediakan akses internet)</li>
                            <li>Tidak boleh menggunakan program ilegal (cheat, map drone, dan tindakan lainnya)</li>
                        </ol>

                        <h6 class="fw-bold">Persyaratan Tim</h6>
                        <ol>
                            <li>Satu tim terdiri dari 5 pemain dan 1 cadangan</li>
                            <li>Untuk nama tim bebas (tidak mengandung unsur pornografi, politik, dan sara) dan sertakan perwakilan nama sekolah nya masing masing</li>
                            <li>Multi slot tidak diperbolehkan</li>
                        </ol>

                        <h6 class="fw-bold">Format Tournament</h6>
                        <ol>
                            <li>Tournament online menggunakan sistem <b><i>single elimination, best of three & best of five</i></b> (BO3 & BO5)</li>
                            <li>Sistem pertandingan Babak <b><i>Qualifier</i></b> 1, 2, 3, 4, <b><i>Semi Final & 3 <sup>rd</sup> Place</i></b> menggunakan sistem <b><i>best of three</i></b> (BO3)</li>
                            <li>Sistem pertandingan <b><i>Grand Final</i></b> menggunakan sistem <b><i>best of five</i></b> (BO5)</li>
                            <li>Pertandingan akan dilaksanakan secara online hingga pertandingan selesai</li>
                            <li>Pertandingan akan disiarkan secara live streaming di akun youtube <a href="https://www.youtube.com/channel/UCH8M6QWatoIzrc-iUm9q-LA" target="_blank" class="text-white fw-bold">Telesandi Festival</a>. Namun tidak semua pertandingan yang disiarkan, tapi pertandingan terpilihlah yang akan disiarkan</li>
                        </ol>

                        <h6 class="fw-bold">Pengaturan Pertandingan</h6>
                        <ol>
                            <li><b><i>Custom room draft pick</i></b> akan dibuat oleh panitia</li>
                            <li>Posisi tim pada tournament online adalah tim bagian atas bracket menempati sisi kiri dan tim bagian bawah bracket menempati sisi kanan pada <b><i>room</i></b></li>
                            <li>Setiap player yang sudah berada di <b><i>Custom room</i></b>, diharapkan mengirim screenshoot melalui <b><i>Group Whatsapp Tournament</i></b> berupa 1 screenshot di <b><i>Custom room</i></b> yang dibuat oleh panitia</li>
                            <li>Setiap player wajib mengirimkan bukti screenshot saat awal pertandingan berlangsung dan mengirimkan 1 screenshot hasil pertandingan</li>
                        </ol>

                        <h6 class="fw-bold">Sistem Pertandingan</h6>
                        <ol>
                            <li><b><i>Match mode</i></b> menggunakan <b><i>Custom draft pick</i></b></li>
                            <li>Diperbolehkan menggunakan skin</li>
                            <li>Tidak diperbolehkan <b><i>Chat all</i></b> (apabila salah satu tim terdapat chat all selain meminta untuk “pause” saat pertandingan berlangsung maka harus mengirimkan bukti screenshot kepada pihak panitia agar dapat di tindak lanjuti)</li>
                            <li><b><i>Taunting</i></b> diperbolehkan.</li>
                            <li>Apabila game mengalami disconnect atau permasalahan koneksi itu tanggung jawab pemain</li>
                            <li>Jika salah satu tim mengalami lag atau koneksi jaringan saat pertandingan berlangsung, maka pertandingan akan langsung di pause oleh pihak panitia (apabila pemain melakukan <b><i>chat all</i></b> dan mengetikkan “P” saat terjadi lag atau koneksi jaringan)</li>
                            <li>Setiap tim mendapatkan 3x pause dalam waktu maksimal 5 menit, jika lebih dari itu panitia berhak melanjutkan pertandingan</li>
                            <li>Setiap tim yang akan bertanding memiliki waktu dispensasi maksimal 5 menit, jika lebih dari itu maka akan di diskualifikasi</li>
                        </ol>

                        <h6 class="fw-bold">Jadwal lomba</h6>
                        <ul>
                            <li>15 Januari 2022 : Babak Qualifier 1</li>
                            <li>16 Januari 2022 : Babak Qualifier 1</li>
                            <li>22 Januari 2022 : Babak Qualifier 2</li>
                            <li>23 Januari 2022 : Babak Qualifier 3 & 4</li>
                            <li>29 Januari 2022 : Babak Semifinal, 3 <sup>rd</sup> Place, dan Grand Final</li>
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
                        <li>Setiap pemain wajib memiliki device berupa smartphone/iphone (no emulator) serta akun Mobile Legends sendiri dan bukan milik orang lain</li>
                        <li>Setiap pemain harus sudah terdaftar di website <a href="#" class="text-white fw-bold">Telesandi Festival</a> formulir yang telah di sediakan.</li>
                        <li>Pemain yang tidak terdaftar namun mengikuti pertandingan maka akan di diskualifikasi</li>
                        <li>Nickname tidak mengandung unsur pornografi, politik, dan sara</li>
                        <li>Jika sudah mendaftar dilarang mengganti nickname sampai tournament ini selesai</li>
                        <li>Setiap pemain memiliki kuota internet sendiri (pihak penyelengara tidak menyediakan akses internet)</li>
                        <li>Tidak boleh menggunakan program ilegal (cheat, map drone, dan tindakan lainnya)</li>
                    </ol>

                    <h6 class="fw-bold">Persyaratan Tim</h6>
                    <ol>
                        <li>Satu tim terdiri dari 5 pemain dan 1 cadangan</li>
                        <li>Untuk nama tim bebas (tidak mengandung unsur pornografi, politik, dan sara) dan sertakan perwakilan nama sekolah nya masing masing</li>
                        <li>Multi slot tidak diperbolehkan</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="peraturan" style="display: none">
                    <h6 class="fw-bold">Format Tournament</h6>
                    <ol>
                        <li>Tournament online menggunakan sistem <b><i>single elimination, best of three & best of five</i></b> (BO3 & BO5)</li>
                        <li>Sistem pertandingan Babak <b><i>Qualifier</i></b> 1, 2, 3, 4, <b><i>Semi Final & 3 <sup>rd</sup> Place</i></b> menggunakan sistem <b><i>best of three</i></b> (BO3)</li>
                        <li>Sistem pertandingan <b><i>Grand Final</i></b> menggunakan sistem <b><i>best of five</i></b> (BO5)</li>
                        <li>Pertandingan akan dilaksanakan secara online hingga pertandingan selesai</li>
                        <li>Pertandingan akan disiarkan secara live streaming di akun youtube <a href="https://www.youtube.com/channel/UCH8M6QWatoIzrc-iUm9q-LA" target="_blank" class="text-white fw-bold">Telesandi Festival</a>. Namun tidak semua pertandingan yang disiarkan, tapi pertandingan terpilihlah yang akan disiarkan</li>
                    </ol>

                    <h6 class="fw-bold">Pengaturan Pertandingan</h6>
                    <ol>
                        <li><b><i>Custom room draft pick</i></b> akan dibuat oleh panitia</li>
                        <li>Posisi tim pada tournament online adalah tim bagian atas bracket menempati sisi kiri dan tim bagian bawah bracket menempati sisi kanan pada <b><i>room</i></b></li>
                        <li>Setiap player yang sudah berada di <b><i>Custom room</i></b>, diharapkan mengirim screenshoot melalui <b><i>Group Whatsapp Tournament</i></b> berupa 1 screenshot di <b><i>Custom room</i></b> yang dibuat oleh panitia</li>
                        <li>Setiap player wajib mengirimkan bukti screenshot saat awal pertandingan berlangsung dan mengirimkan 1 screenshot hasil pertandingan</li>
                    </ol>

                    <h6 class="fw-bold">Sistem Pertandingan</h6>
                    <ol>
                        <li><b><i>Match mode</i></b> menggunakan <b><i>Custom draft pick</i></b></li>
                        <li>Diperbolehkan menggunakan skin</li>
                        <li>Tidak diperbolehkan <b><i>Chat all</i></b> (apabila salah satu tim terdapat chat all selain meminta untuk “pause” saat pertandingan berlangsung maka harus mengirimkan bukti screenshot kepada pihak panitia agar dapat di tindak lanjuti)</li>
                        <li><b><i>Taunting</i></b> diperbolehkan.</li>
                        <li>Apabila game mengalami disconnect atau permasalahan koneksi itu tanggung jawab pemain</li>
                        <li>Jika salah satu tim mengalami lag atau koneksi jaringan saat pertandingan berlangsung, maka pertandingan akan langsung di pause oleh pihak panitia (apabila pemain melakukan <b><i>chat all</i></b> dan mengetikkan “P” saat terjadi lag atau koneksi jaringan)</li>
                        <li>Setiap tim mendapatkan 3x pause dalam waktu maksimal 5 menit, jika lebih dari itu panitia berhak melanjutkan pertandingan</li>
                        <li>Setiap tim yang akan bertanding memiliki waktu dispensasi maksimal 5 menit, jika lebih dari itu maka akan di diskualifikasi</li>
                    </ol>
                </div>
                
                <div class="py-5 text-white" id="jadwal" style="display: none">
                    <h6 class="fw-bold">Jadwal lomba</h6>
                    <ul>
                        <li>15 Januari 2022 : Babak Qualifier 1</li>
                        <li>16 Januari 2022 : Babak Qualifier 1</li>
                        <li>22 Januari 2022 : Babak Qualifier 2</li>
                        <li>23 Januari 2022 : Babak Qualifier 3 & 4</li>
                        <li>29 Januari 2022 : Babak Semifinal, 3 <sup>rd</sup> Place, dan Grand Final</li>
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
                        <label class="form-label fw-bold">Player 5</label>
                        <input type="text" name="player4" class="border-input p-2 px-4 w-100" placeholder="Nama player 5" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Player 6 (cadangan)</label>
                        <input type="text" name="player5" class="border-input p-2 px-4 w-100" placeholder="Nama player 6" required>
                    </div>

                    <button class="btn btn-login p-2 my-3 w-100 fw-bold">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection