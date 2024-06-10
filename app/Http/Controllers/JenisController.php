<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis_brg = Jenis::query()->latest()->get();
        return view("page.masterbarang.jenisbarang.index", compact("jenis_brg"));
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
        $jenis_brg = [
            'jenis_barang' => $request->input('jenis_barang'),
            'keterangan' => $request->input('keterangan'),
        ];
        Jenis::create($jenis_brg);
        return redirect('/jenisbarang')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jenis_brg = [
            'jenis_barang' => $request->input('jenis_barang'),
            'keterangan' => $request->input('keterangan'),
        ];
        Jenis::where('id', $id)->update($jenis_brg);
        // dd($id);
        return redirect('/jenisbarang')->with('success', 'berhasil menyimpan perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jenis::destroy($id);
        return redirect('/jenisbarang')->with('success', 'data berhasil didelete');
    }
}
