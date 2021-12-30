// Detail NavTabs
var detail = document.getElementById('detail');
var navdetail = document.getElementById('nav_detail');

// Ketentuan NavTabs
var ketentuan = document.getElementById('ketentuan');
var navketentuan = document.getElementById('nav_ketentuan');

// Peraturan NavTabs
var peraturan = document.getElementById('peraturan');
var navperaturan = document.getElementById('nav_peraturan');

// Jadwal NavTabs
var jadwal = document.getElementById('jadwal');
var navjadwal = document.getElementById('nav_jadwal');

// Peserta NavTabs
var peserta = document.getElementById('peserta');
var navpeserta = document.getElementById('nav_peserta');

// Bracket NavTabs
var bracket = document.getElementById('bracket');
var navbracket = document.getElementById('nav_bracket');



function nav_detail(){

    if(detail.style.display === "block"){
        detail.style.display = "none";

        navdetail.classList.add('text-white');
        navdetail.classList.remove('active');
    }
    else{
        detail.style.display = "block";

        navdetail.classList.add('active');
        navdetail.classList.add('disabled');
        navdetail.classList.remove('text-white');

        // SELAIN DETAIL
        
        ketentuan.style.display = "none";
        peraturan.style.display = "none";

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');
        navketentuan.classList.remove('disabled');
        
        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('active');
        navperaturan.classList.remove('disabled');

    }
}

function nav_ketentuan(){

    if(ketentuan.style.display === "block"){
        detail.style.display = "block"
        ketentuan.style.display = "none";
        jadwal.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.add('active');
        navdetail.classList.remove('text-white');

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');
    }
    else{
        ketentuan.style.display = "block";

        navketentuan.classList.remove('text-white')
        navketentuan.classList.add('active');
        navketentuan.classList.add('disabled');

        // SELAIN KETENTUAN
        detail.style.display = "none"
        peraturan.style.display = "none"
        jadwal.style.display = "none"
        peserta.style.display = "none"
        bracket.style.display = "none"

        navdetail.classList.remove('active');
        navdetail.classList.add('text-white');
        navdetail.classList.remove('disabled');

        navperaturan.classList.remove('active');
        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('disabled');
        
        navjadwal.classList.add('text-white')
        navjadwal.classList.remove('active');
        navjadwal.classList.remove('disabled');

        navpeserta.classList.add('text-white')
        navpeserta.classList.remove('active');
        navpeserta.classList.remove('disabled');

        navbracket.classList.add('text-white')
        navbracket.classList.remove('active');
        navbracket.classList.remove('disabled');
    }
}

function nav_peraturan(){

    if(peraturan.style.display === "block"){
        detail.style.display = "block"
        ketentuan.style.display = "none";
        peraturan.style.display = "none";
        jadwal.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.add('active');
        navdetail.classList.remove('text-white');

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');

        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('active');
    }
    else{
        peraturan.style.display = "block";

        navperaturan.classList.remove('text-white')
        navperaturan.classList.add('active');
        navperaturan.classList.add('disabled');

        // SELAIN PERATURAN
        
        detail.style.display = "none"
        ketentuan.style.display = "none"
        jadwal.style.display = "none"
        peserta.style.display = "none"
        bracket.style.display = "none"

        navdetail.classList.add('text-white');
        navdetail.classList.remove('active');
        navdetail.classList.remove('disabled');

        navketentuan.classList.add('text-white')
        navketentuan.classList.remove('active');
        navketentuan.classList.remove('disabled');

        navjadwal.classList.add('text-white')
        navjadwal.classList.remove('active');
        navjadwal.classList.remove('disabled');

        navpeserta.classList.add('text-white')
        navpeserta.classList.remove('active');
        navpeserta.classList.remove('disabled');

        navbracket.classList.add('text-white')
        navbracket.classList.remove('active');
        navbracket.classList.remove('disabled');

    }
}

function nav_jadwal(){

    if(jadwal.style.display === "block"){
        detail.style.display = "block"
        ketentuan.style.display = "none";
        peraturan.style.display = "none";
        jadwal.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.add('active');
        navdetail.classList.remove('text-white');

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');

        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('active');

        navjadwal.classList.add('text-white');
        navjadwal.classList.remove('active');
    }
    else{
        jadwal.style.display = "block";

        navjadwal.classList.remove('text-white')
        navjadwal.classList.add('active');
        navjadwal.classList.add('disabled');

        // SELAIN JADWAL
        
        detail.style.display = "none";
        ketentuan.style.display = "none";
        peraturan.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.remove('active');
        navdetail.classList.add('text-white');
        navdetail.classList.remove('disabled');

        navketentuan.classList.add('text-white')
        navketentuan.classList.remove('active');
        navketentuan.classList.remove('disabled');

        navperaturan.classList.add('text-white')
        navperaturan.classList.remove('active');
        navperaturan.classList.remove('disabled');

        navpeserta.classList.add('text-white')
        navpeserta.classList.remove('active');
        navpeserta.classList.remove('disabled');
        
        navbracket.classList.add('text-white')
        navbracket.classList.remove('active');
        navbracket.classList.remove('disabled');

    }
}

function nav_peserta(){

    if(peserta.style.display === "block"){
        detail.style.display = "block"

        ketentuan.style.display = "none";
        peraturan.style.display = "none";
        jadwal.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.add('active');
        navdetail.classList.remove('text-white');

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');

        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('active');

        navjadwal.classList.add('text-white');
        navjadwal.classList.remove('active');

        navpeserta.classList.add('text-white');
        navpeserta.classList.remove('active');
    }
    else{
        peserta.style.display = "block";

        navpeserta.classList.remove('text-white')
        navpeserta.classList.add('active');
        navpeserta.classList.add('disabled');

        // SELAIN PESERTA
        
        detail.style.display = "none"
        ketentuan.style.display = "none"
        peraturan.style.display = "none"
        jadwal.style.display = "none"
        bracket.style.display = "none";

        navdetail.classList.remove('active');
        navdetail.classList.add('text-white');
        navdetail.classList.remove('disabled');

        navketentuan.classList.add('text-white')
        navketentuan.classList.remove('active');
        navketentuan.classList.remove('disabled');

        navperaturan.classList.add('text-white')
        navperaturan.classList.remove('active');
        navperaturan.classList.remove('disabled');

        navjadwal.classList.add('text-white')
        navjadwal.classList.remove('active');
        navjadwal.classList.remove('disabled');

        navbracket.classList.add('text-white')
        navbracket.classList.remove('active');
        navbracket.classList.remove('disabled');

    }
}

function nav_bracket(){

    if(bracket.style.display === "block"){
        detail.style.display = "block"

        ketentuan.style.display = "none";
        peraturan.style.display = "none";
        jadwal.style.display = "none";
        peserta.style.display = "none";
        bracket.style.display = "none";

        navdetail.classList.add('active');
        navdetail.classList.remove('text-white');

        navketentuan.classList.add('text-white');
        navketentuan.classList.remove('active');

        navperaturan.classList.add('text-white');
        navperaturan.classList.remove('active');

        navjadwal.classList.add('text-white');
        navjadwal.classList.remove('active');

        navpeserta.classList.add('text-white');
        navpeserta.classList.remove('active');

        navbracket.classList.add('text-white');
        navbracket.classList.remove('active');
    }
    else{
        bracket.style.display = "block";

        navbracket.classList.remove('text-white')
        navbracket.classList.add('active');
        navbracket.classList.add('disabled');

        // SELAIN BRACKET
        
        detail.style.display = "none"
        ketentuan.style.display = "none"
        peraturan.style.display = "none"
        jadwal.style.display = "none"
        peserta.style.display = "none";

        navdetail.classList.remove('active');
        navdetail.classList.add('text-white');
        navdetail.classList.remove('disabled');

        navketentuan.classList.add('text-white')
        navketentuan.classList.remove('active');
        navketentuan.classList.remove('disabled');

        navperaturan.classList.add('text-white')
        navperaturan.classList.remove('active');
        navperaturan.classList.remove('disabled');

        navjadwal.classList.add('text-white')
        navjadwal.classList.remove('active');
        navjadwal.classList.remove('disabled');

        navpeserta.classList.add('text-white')
        navpeserta.classList.remove('active');
        navpeserta.classList.remove('disabled');

    }
}


// DAFTAR LOMBA SOLO ATAU KELOMPOK 

var solo = document.getElementById('solo');
var btnsolo = document.getElementById('btnsolo');

var kelompok = document.getElementById('kelompok');
var btnkelompok = document.getElementById('btnkelompok');

var kriteria = document.getElementById('kriteria');

function daftarsolo(){

    if(solo.style.display === "block"){
        solo.style.display = "none";
        kelompok.style.display = "block";
        btnsolo.classList.remove('disabled');
    }
    else{
        solo.style.display = "block";
        kelompok.style.display = "none";

        btnsolo.classList.add('disabled');
        btnkelompok.classList.remove('disabled');

        kriteria.innerHTML = "Solo";
    }

}

function daftarkelompok(){

    if(kelompok.style.display === "block"){
        kelompok.style.display = "none";
        solo.style.display = "block";
        btnkelompok.classList.remove('disabled');
    }
    else{
        kelompok.style.display = "block";
        solo.style.display = "none";

        btnkelompok.classList.add('disabled');
        btnsolo.classList.remove('disabled')
        
        kriteria.innerHTML = "Kelompok / Band";
    }

}