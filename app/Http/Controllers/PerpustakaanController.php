<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('0098index', ['buku' => $buku]);
    }
    public function selectt()
    {
        $buku = Buku::select('kode_buku', 'judul_buku', 'kode_penerbit', 'pengarang_buku')->get();
        return view('0098selectt', ['buku' => $buku]);
    }
    public function selectwhere()
    {
        $buku = Buku::select('kode_buku', 'judul_buku', 'kode_penerbit', 'pengarang_buku')
            ->where('kode_penerbit', 'P001')->get();
        return view('0098selectwhere', ['buku' => $buku]);
    }
    public function selectjoin()
    {
        $buku = Buku::select('kode_buku', 'judul_buku', 'buku.kode_penerbit', 'pengarang_buku', 'nama_penerbit')->join('penerbit', 'buku.kode_penerbit', '=', 'penerbit.kode_penerbit')->get();
        return view('0098selectjoin', ['buku' => $buku]);
    }
    public function selectjoinwhere()
    {
        $buku = Buku::select('kode_buku', 'judul_buku', 'buku.kode_penerbit', 'pengarang_buku', 'nama_penerbit')->join('penerbit', 'buku.kode_penerbit', '=', 'penerbit.kode_penerbit')->where('buku.kode_penerbit', 'P002')->get();
        return view('0098selectjoinwhere', ['buku' => $buku]);
    }
}
