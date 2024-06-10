<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_brg = Jenis::query()->latest()->get();
        $satuan_brg = Satuan::query()->latest()->get();
        $barang = Barang::query()->latest()->get();
        // dd($barang);
        return view("page.masterbarang.barang.index", compact("barang", "jenis_brg", "satuan_brg"));
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
        $barang = [
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'jenis_barang' => $request->input('jenis_barang'),
            'satuan' => $request->input('satuan'),
            // 'harga' => $request->input('harga'),
        ];
        Barang::create($barang);
        return redirect('/barang')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $barang = [
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'jenis_barang' => $request->input('jenis_barang'),
            'satuan' => $request->input('satuan'),
            // 'harga' => $request->input('harga'),
        ];
        Barang::where('id', $id)->update($barang);
        return redirect('/barang')->with('success', 'Berhasil simpan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/barang')->with('success', 'data berhasil didelete');
    }

    // Method untuk mendapatkan data barang berdasarkan kode_barang
    public function getBarangByKode($kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->first();

        if ($barang) {
            return response()->json([
                'nama_barang' => $barang->nama_barang,
                'jenis_barang' => $barang->jenis_barang, // Pastikan kolom 'jenis' ada di tabel barang
                'satuan' => $barang->satuan // Pastikan kolom 'satuan' ada di tabel barang
            ]);
        }

        return response()->json([
            'message' => 'Barang tidak ditemukan!',
        ], 404);
    }
}
