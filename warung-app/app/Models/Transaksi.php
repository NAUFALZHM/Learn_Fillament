<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public $table = 'transaksi';
    protected $fillable = ['user_id','barang_id', 'jumlah', 'total_harga', 'tanggal'];
}
    