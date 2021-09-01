<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah_pesanan',
        'total_harga',
        'product_id',
        'pesanan_id',
    ];

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'pesanan_id', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(produk::class, 'product_id', 'id');
    }
}
