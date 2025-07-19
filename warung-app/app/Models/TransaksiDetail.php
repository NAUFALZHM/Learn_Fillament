<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    //
    public $table = 'transaksi_detail';
    protected $fillable = ['transaksi_id', 'barang_id', 'qty', 'harga_satuan'];
}
