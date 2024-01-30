<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Categori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();

        return view('dashboard.data_barang',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Categori::all();
        return view('dashboard.data_barang.create',['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'id_user' => 'required',
            'id_categori' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'jumlah_terjual' => 'required'
        ]);

        $simpan = Barang::create($validasi);

        return redirect('data/barang')->with('success','data barang berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Barang::findOrFail($id);
        $categori = Categori::all();

        return view('dashboard.data_barang.edit',['data'=>$data,'categori'=>$categori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'id_user' => 'required',
            'id_categori' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'jumlah_terjual' => 'required'
        ]);
        $data = Barang::findOrFail($id);
        $data->update($validasi);

        return redirect('data/barang')->with('success','data barang berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Barang::findOrFail($id);
        $data->delete();
        return redirect('/data/barang')
        ->with('success', 'Record deleted successfully!');
    }
}
