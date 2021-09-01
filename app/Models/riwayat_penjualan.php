<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk','total_harga'];
}
