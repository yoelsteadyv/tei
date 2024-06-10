<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_masuk',
        'kode_barang_masuk',
        'kode_barang',
        'supplier',
        'barang',
        'jumlah_masuk'
    ];
}
