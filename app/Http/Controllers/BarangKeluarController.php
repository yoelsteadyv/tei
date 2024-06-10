<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\MainCustomer;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::query()->latest()->get();
        $customer = MainCustomer::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()->latest()->get();
        // dd($barang);
        return view("page.barangkeluar.index", compact("barang_keluar", "customer", "barang"));
    }

    public function tambah()
    {
        $barang = Barang::query()->latest()->get();
        $customer = MainCustomer::query()->latest()->get();
        $barang_keluar = BarangKeluar::query()->latest()->get();
        // dd($barang);
        return view("page.barangkeluar.tambah", compact("barang_keluar", "customer", "barang"));
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
        $barang_keluar = [
            'tgl_keluar' => $request->input('tgl_keluar'),
            'kode_barang_keluar' => $request->input('kode_barang_keluar'),
            'kode_barang' => $request->input('kode_barang'),
            'customer' => $request->input('customer'),
            'tujuan' => $request->input('tujuan'),
            'barang' => $request->input('barang'),
            'jumlah_keluar' => $request->input('jumlah_keluar'),
        ];
        // dd($barang_keluar);
        BarangKeluar::create($barang_keluar);
        return redirect('/barangkeluar')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang_keluar = [
            'tgl_keluar' => $request->input('tgl_keluar'),
            'kode_barang_keluar' => $request->input('kode_barang_keluar'),
            'kode_barang' => $request->input('kode_barang'),
            'customer' => $request->input('customer'),
            'tujuan' => $request->input('tujuan'),
            'barang' => $request->input('barang'),
            'jumlah_keluar' => $request->input('jumlah_keluar'),
        ];
        BarangKeluar::where('id', $id)->update($barang_keluar);
        return redirect('/barangkeluar')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BarangKeluar::destroy($id);
        return redirect('/barangkeluar')->with('success', 'data berhasil dihapus');
    }
}
