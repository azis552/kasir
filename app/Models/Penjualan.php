<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal_penjualan','total_harga','status'];

    public function detail_penjualan()
    {
      return  $this->hasOne(DetailPenjualan::class,'id_penjualan','id');
    }
}
