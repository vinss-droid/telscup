<footer class="bg-dark pt-3">
    <div class="container">
        <div class="row justify-content-center py-3">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <center>
                    <img src="{{ asset('img/LOGO TELSCUP.png') }}" alt="Logo" width="50%" class="d-block cursor-pointer">
                    <div class="d-inline sosmed-ft">
                        <a href="https://instagram.com/telesandi.festival/" class="text-decoration-none" target="_BLANK">
                            <h4 class="d-inline"><i class="fab fa-instagram text-white"></i></h4>
                        </a>
                        <a href="https://www.youtube.com/channel/UCH8M6QWatoIzrc-iUm9q-LA/" class="text-decoration-none" target="_BLANK">
                            <h4 class="d-inline"><i class="fab fa-youtube text-white ps-2"></i></h4>
                        </a>
                    </div>
                </center>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 bg- pt-5">
                <h5 class="text-white fw-bold">NAVIGASI</h5>
                <div class="d-block pt-4">
                    <a href="{{ route('home') }}" class="text-white text-decoration-none d-block pt-2">Beranda</a>
                    <a href="{{ route('lomba') }}" class="text-white text-decoration-none d-block pt-2">Daftar Lomba</a>
                    <a href="{{ route('home') }}#cara-daftar" class="text-white text-decoration-none d-block pt-2">Cara Daftar</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 bg- pt-5">
                <h5 class="text-white fw-bold">LOMBA</h5>
                <div class="d-block pt-4">
                    <a href="{{ route('musik') }}" class="text-white text-decoration-none d-block pt-2">Cover Music</a>
                    <a href="{{ route('foto') }}" class="text-white text-decoration-none d-block pt-2">Photography</a>
                    <a href="{{ route('poster') }}" class="text-white text-decoration-none d-block pt-2">Desain Poster</a>
                    <a href="{{ route('movie') }}" class="text-white text-decoration-none d-block pt-2">Short Movie</a>
                    <a href="{{ route('ml') }}" class="text-white text-decoration-none d-block pt-2">Mobile Legend</a>
                    <a href="{{ route('ff') }}" class="text-white text-decoration-none d-block pt-2">Free Fire</a>
                    <a href="{{ route('pubg') }}" class="text-white text-decoration-none d-block pt-2">PUBG</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 bg- pt-5">
                <h6 class="text-white fw-bold">CONTACT US</h6>
                <div class="d-block pt-4">
                    <a class="text-white text-decoration-none d-block pt-2">021-1910-2855 (Pak Amir)</a>
                    <a class="text-white text-decoration-none d-block pt-2">0813-8151-1791 (Riyan)</a>
                    <a class="text-white text-decoration-none d-block pt-2">0857-3291-3685 (Nadila)</a>
                    <a class="text-white text-decoration-none d-block pt-2">telscup@gmail.com</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-main-dark p-3">
        <h6 class="text-center text-white py-3">Copyright &copy; {{ date("Y") }} <strong><a href="https://syntx.id/" class="text-decoration-none" target="_BLANK">Syntx.id</a></strong>. All Right Reserved.</h6>
    </div>

</footer>