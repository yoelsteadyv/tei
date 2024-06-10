<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSupplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'telepon',
        'alamat',
        'email',
        'person',
    ];
}
