<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Pages.Home');
    }

    public function loginui()
    {
        return view('Pages.LoginUI');
    }

    public function regisui()
    {
        return view('Pages.RegisUI');
    }

    public function daftarLomba()
    {
        return view('pages.DaftarLomba');
    }

    public function pubg()
    {
        return view('Pages.lomba.pubg');
    }

    public function ml()
    {
        return view('Pages.lomba.ml');
    }

    public function ff()
    {
        return view('Pages.lomba.ff');
    }

    public function poster()
    {
        return view('Pages.lomba.poster');
    }

    public function foto()
    {
        return view('Pages.lomba.foto');
    }

    public function movie()
    {
        return view('Pages.lomba.movie');
    }

    public function musik()
    {
        return view('Pages.lomba.musik');
    }

    public function pendaftaran_pubg()
    {
        return view('Pages.pendaftaran.PendaftaranPubg');
    }

    public function pendaftaran_ml()
    {
        return view('Pages.pendaftaran.PendaftaranML');
    }

    public function pendaftaran_ff()
    {
        return view('Pages.pendaftaran.PendaftaranFF');
    }

    public function pendaftaran_poster()
    {
        return view('Pages.pendaftaran.PendaftaranPoster');
    }

    public function pendaftaran_foto()
    {
        return view('Pages.pendaftaran.PendaftaranFoto');
    }

    public function pendaftaran_movie()
    {
        return view('Pages.pendaftaran.PendaftaranMovie');
    }

    public function pendaftaran_musik()
    {
        return view('Pages.pendaftaran.PendaftaranMusik');
    }
}
