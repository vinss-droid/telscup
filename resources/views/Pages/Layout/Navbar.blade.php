<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/LOGO TELSCUP.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lomba') }}">Daftar Lomba</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home#cara-daftar">Cara Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-masuk" href="{{ route('loginui') }}">Daftar / Masuk</a>
                </li>
            </ul>
                {{-- <li class="nav-item ms-auto me-auto">
                    <img src="{{ asset('img/LOGO TELSCUP.png') }}" alt="" class="logo-nav">
                </li> --}}
        </div>
    </div>
</nav>