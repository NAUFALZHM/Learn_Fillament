<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    //
    public $table = 'pengeluaran';
    protected $fillable = ['nama','nominal', 'jumlah', 'tanggal', 'keterangan'];
}
