<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    //
    public function index()
    {
        $datas = [
            'barang' => Barang::query()->latest()->get(),
            'jumlah_masuk' => BarangMasuk::where('barang', 'nama_barang')->sum('jumlah_masuk'),
            'jumlah_keluar' => BarangKeluar::where('barang', 'nama_barang')->sum('jumlah_keluar'),
        ];

        return view("page.laporan.stok.index", compact("datas"));
    }
}
