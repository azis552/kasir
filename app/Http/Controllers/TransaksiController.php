<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data= Penjualan::where('status','=','pesan')
        ->orderBy('created_at','desc')
        ->get();
        return view('dashboard.data_transaksi',['data'=>$data]);
    }
    public function detail_transaksi($id)
    {
        $list_barang = DetailPenjualan::where('id_penjualan','=',$id)->get();
        $data = Penjualan::all();
        return view('dashboard.data_transaksi.detail_transaksi',['data'=>$data,'list'=>$list_barang,'id'=>$id]);
    }
    public function bayar(Request $request,$id)
    {
        $data = Penjualan::findOrFail($id);
        $update = [
            'diskon' => $request->input('diskon'),
            'total' => $request->input('total'),
            'total_bayar' => $request->input('bayar'),
            'kembalian' => $request->input('kembalian'),
            'status' => 'bayar'
        ];
        $data->update($update);
        return redirect('/transaksi')->with('success','Berhasil Bayar !');
    }
    public function sudah_bayar()
    {
        $data= Penjualan::where('status','=','bayar')
        ->orderBy('created_at','desc')
        ->get();
        return view('dashboard.data_transaksi.transaksi_terbayar',['data'=>$data]);
    }
    public function nota($id)
    {
        $data_pembayaran= Penjualan::where('id','=',$id)
        ->orderBy('created_at','desc')
        ->get();
        $data_barang = DetailPenjualan::where('id_penjualan','=',$id)->get();
        $data = [
            'data_pembayaran' => $data_pembayaran,
            'data_barang' => $data_barang,
        ];
        $pdf = FacadePdf::loadView('dashboard.pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
