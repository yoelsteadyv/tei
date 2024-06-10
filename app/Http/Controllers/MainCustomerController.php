<?php

namespace App\Http\Controllers;

use App\Models\MainCustomer;
use Illuminate\Http\Request;

class MainCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main_customer = MainCustomer::query()->latest()->get();
        // dd($barang);
        return view("page.maincustomer.index", compact("main_customer"));
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
        $main_customer = [
            'kode_customer' => $request->input('kode_customer'),
            'nama_customer' => $request->input('nama_customer'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainCustomer::create($main_customer);
        return redirect('/maincustomer')->with('success', 'Berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(MainCustomer $mainCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainCustomer $mainCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $main_customer = [
            'kode_customer' => $request->input('kode_customer'),
            'nama_customer' => $request->input('nama_customer'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'person' => $request->input('person'),
        ];
        MainCustomer::where('id', $id)->update($main_customer);
        return redirect('maincustomer')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MainCustomer::destroy($id);
        return redirect('maincustomer')->with('success', 'Data berhasil dihapus');
    }

    // Method untuk mendapatkan data barang berdasarkan kode_barang
    public function getCustomerByName($nama_customer)
    {
        $customer = MainCustomer::where('nama_customer', $nama_customer)->first();

        if ($customer) {
            return response()->json([
                'alamat' => $customer->alamat
            ]);
        }

        return response()->json([
            'message' => 'Customer tidak ditemukan!',
        ], 404);
    }
}
