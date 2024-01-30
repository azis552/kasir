<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id_user','id_review','id_categori','nama_barang','harga','stok','jumlah_terjual'];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
