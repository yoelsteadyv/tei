<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCustomer extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_customer',
        'nama_customer',
        'telepon',
        'alamat',
        'email',
        'person',
    ];
}
