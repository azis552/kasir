<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function keranjang()
    {
        @$key = session('cart');
        $penjualan = DetailPenjualan::where('sesi','=',$key)->get();
        return view('landingpage.keranjang',['penjualan'=>$penjualan]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    $timestamp = Carbon::now()->format('Y-m-d H:i:s.u');
    if (!$request->session()->has('cart')) {
        // Jika session belum ada, buat session baru untuk keranjang belanja
         $request->session()->put('cart', $timestamp,30);
    }
    $sesi = $request->session()->get('cart');
    // Ambil data barang yang dikirim dari form
    $barangId = $request->input('id_barang');
    $jumlah = $request->input('qty_val');

    // pencarian harga
    $barang = Barang::findOrFail($barangId);
    $harga = $barang->harga;
    // total harga
    $total = $harga*$jumlah;

    $keranjang = new DetailPenjualan();
    $keranjang->id_barang = $barangId;
    $keranjang->jumlah_barang = $jumlah;
    $keranjang->total = $total;
    $keranjang->sesi = $sesi;
    $keranjang->save();

    // Beri respons JSON untuk AJAX
    return response()->json(['success' => true]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
