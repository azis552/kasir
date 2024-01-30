<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id_users','id_review','id_categori','nama_barang','harga','stok','jumlah_terjual'];

    public function user(){
        return $this->hasOne(User::class,'id_users','id');
    }
}
