<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillabel = [
        'kode','nama','harga_beli','harga_jual','stok','min_stok','jenis_produk_id'
    ];

    //relasi one to many ke table yang berhubungan denga produk
    public function jenis_produk(){
        return $this->belongsTo(Jenis_produk::class);
    }
}
