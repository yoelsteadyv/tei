<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_keluar',
        'kode_barang_keluar',
        'kode_barang',
        'customer',
        'tujuan',
        'barang',
        'jumlah_keluar'
    ];
}
