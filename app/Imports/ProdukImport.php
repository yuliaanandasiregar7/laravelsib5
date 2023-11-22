<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produk([
            //
            'kode' => $row[1],
            'nama'=> $row[2],
            'harga_beli' => $row[3],
            'harga_jual' => $row[4],
            'stok'=> $row[5],
            'min_stok'=> $row[6],
            'jenis_produk_id'=> $row[7],
        ]);
    }
}
