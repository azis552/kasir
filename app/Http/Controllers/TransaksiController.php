<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('penjualans')
        ->leftJoin('detail_penjualans', 'penjualans.id', '=', 'detail_penjualans.id_penjualan')
        ->select('penjualans.*','detail_penjualans.*')
        ->distinct('detail_penjualans.id_penjualan')
        ->get();
        return view('dashboard.data_transaksi',['data'=>$data]);
    }
}
