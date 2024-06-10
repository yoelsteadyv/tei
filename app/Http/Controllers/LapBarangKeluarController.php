<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\MainCustomer;
use Illuminate\Http\Request;

class LapBarangKeluarController extends Controller
{
    public function index()
    {
        $barang = Barang::query()->latest()->get();
        $customer = MainCustomer::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()->latest()->get();
        // dd($barang);
        return view("page.laporan.laporankeluar.index", compact("barang_keluar", "barang", "customer"));
    }
}
