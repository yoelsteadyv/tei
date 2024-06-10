<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $satuan_brg = Satuan::query()->latest()->get();
        return view("page.masterbarang.satuan.index", compact("satuan_brg"));
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
        $satuan_brg = [
            'satuan_barang' => $request->input('satuan_barang'),
            'keterangan' => $request->input('keterangan'),
        ];
        Satuan::create($satuan_brg);
        return redirect('/satuanbarang')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satuan $satuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $satuan_brg = [
            'satuan_barang' => $request->input('satuan_barang'),
            'keterangan' => $request->input('keterangan'),
        ];
        Satuan::where('id', $id)->update($satuan_brg);
        // dd($id);
        return redirect('/satuanbarang')->with('success', 'berhasil menyimpan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Satuan::destroy($id);
        return redirect('/satuanbarang')->with('success', 'data berhasil didelete');
    }
}
