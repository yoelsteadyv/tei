<?php

namespace App\Http\Controllers;

use App\Models\MainSupplier;
use Illuminate\Http\Request;

class MainSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main_supplier = MainSupplier::query()->latest()->get();
        // dd($barang);
        return view("page.mainsupplier.index", compact("main_supplier"));
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
        $main_supplier = [
            'kode_supplier' => $request->input('kode_supplier'),
            'nama_supplier' => $request->input('nama_supplier'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainSupplier::create($main_supplier);
        return redirect('/mainsupplier')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(MainSupplier $mainSupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainSupplier $mainSupplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $main_supplier = [
            'kode_supplier' => $request->input('kode_supplier'),
            'nama_supplier' => $request->input('nama_supplier'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainSupplier::where('id', $id)->update($main_supplier);
        return redirect('/mainsupplier')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MainSupplier::destroy($id);
        return redirect('/mainsupplier')->with('success', 'Data berhasil dihapus');
    }
}
