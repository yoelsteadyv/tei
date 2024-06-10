<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\MainSupplier;
use Illuminate\Http\Request;

class LapBarangMasukController extends Controller
{
    public function index()
    {
        $barang = Barang::query()->latest()->get();
        $supplier = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()->latest()->get();
        // dd($barang);
        return view("page.laporan.laporanmasuk.index", compact("barang_masuk", "barang", "supplier"));
    }
}
