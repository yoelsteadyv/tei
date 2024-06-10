<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\MainCustomer;
use App\Models\MainSupplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user'] = User::count();
        $data['barang'] = Barang::count();
        $data['customer'] = MainCustomer::count();
        $data['supplier'] = MainSupplier::count();
        $data['barangmasuk'] = BarangMasuk::sum('jumlah_masuk');
        $data['barangkeluar'] = BarangKeluar::sum('jumlah_keluar');
        return view("page.dashboard", $data);
    }
}
