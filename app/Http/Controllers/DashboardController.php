<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::count();
        $petugas = User::count();
        $pelanggan = DetailPenjualan::distinct('nama_pemesan')->count();
        $barang = Barang::count();
        return view('dashboard.dashboard',[
            'penjualan' => $penjualan,
            'petugas' => $petugas,
            'pelanggan' => $pelanggan,
            'barang' => $barang
        ]);
    }
    
}
