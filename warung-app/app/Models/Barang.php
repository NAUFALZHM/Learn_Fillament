<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    public $table = 'barang';
    protected $fillable = ['nama', 'kategori_id', 'harga_modal', 'stok', 'deskripsi', 'harga_jual'];


}
