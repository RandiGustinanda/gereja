<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function daftar_pembaptisan()
    {
        return view('daftar_pembaptisan');
    }

    public function daftar_nikah()
    {
        return view('daftar_nikah');
    }
}
