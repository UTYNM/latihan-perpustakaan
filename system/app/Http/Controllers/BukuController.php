<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function home()
    {
        return view('buku.index');
    }

    public function index()
    {
        return view('buku.kumpulan-buku');
    }

    public function tambah()
    {
        return view('buku.tambah-buku');
    }
}
