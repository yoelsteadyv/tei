<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class StokController extends Controller
{
    //
    public function index()
    {
        $datas = Barang::query()->latest()->get();

        return view("page.laporan.stok.index", compact("datas"));
    }
    public function pdf(Request $request)
    {
        $datas = Barang::query()->latest()->get();
        // $datas = [
        //     'barang' => Barang::query()->latest()->get(),
        //     'jumlah_masuk' => BarangMasuk::where('barang', 'nama_barang')->sum('jumlah_masuk'),
        //     'jumlah_keluar' => BarangKeluar::where('barang', 'nama_barang')->sum('jumlah_keluar'),
        // ];
        if ($request->get('export') == 'pdf') {
            $pdf = Pdf::loadView('page.laporan.stok.pdf', compact("datas", "request"));
            return $pdf->stream('stok.pdf');
        }
        // return view("page.laporan.stok.pdf", compact("datas", "request"));
    }
}
