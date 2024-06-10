<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\MainSupplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::query()->latest()->get();
        $supplier = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()->latest()->get();
        // dd($barang);
        return view("page.barangmasuk.index", compact("barang_masuk", "barang", "supplier"));
    }
    public function tambah()
    {
        $barang = Barang::query()->latest()->get();
        $supplier = MainSupplier::query()->latest()->get();
        $barang_masuk = BarangMasuk::query()->latest()->get();
        // dd($barang);
        return view("page.barangmasuk.tambah", compact("barang_masuk", "barang", "supplier"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang_masuk = [
            'tgl_masuk' => $request->input('tgl_masuk'),
            'kode_barang_masuk' => $request->input('kode_barang_masuk'),
            'kode_barang' => $request->input('kode_barang'),
            'supplier' => $request->input('supplier'),
            'barang' => $request->input('barang'),
            'jumlah_masuk' => $request->input('jumlah_masuk'),
        ];

        $barang = Barang::where('nama_barang', $request->input('barang'))->first();
        $barang->masuk += $request->input('jumlah_masuk');
        $barang->save();

        BarangMasuk::create($barang_masuk);
        return redirect('/barangmasuk')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang_masuk = [
            'tgl_masuk' => $request->input('tgl_masuk'),
            'kode_barang_masuk' => $request->input('kode_barang_masuk'),
            'kode_barang' => $request->input('kode_barang'),
            'supplier' => $request->input('supplier'),
            'barang' => $request->input('barang'),
            'jumlah_masuk' => $request->input('jumlah_masuk'),
        ];
        $barang = Barang::where('nama_barang', $request->input('barang'))->first();

        // Hitung selisih jumlah_masuk baru dengan jumlah_masuk lama
        $selisih_jumlah = $request->input('jumlah_masuk') - BarangMasuk::find($id)->jumlah_masuk;

        // Update masuk barang berdasarkan selisih jumlah_masuk
        $barang->masuk += $selisih_jumlah;
        $barang->save();

        BarangMasuk::where('id', $id)->update($barang_masuk);
        return redirect('/barangmasuk')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BarangMasuk::destroy($id);
        return redirect('/barangmasuk')->with('success', 'Data berhasil dihapus');
    }
}
