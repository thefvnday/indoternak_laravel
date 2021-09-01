<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pemesanan',
        'status',
        'total_harga',
        'kode_unik',
        'user_id',
    ];

    // public function detailPesanans()
    // {
    //     return $this->hasMany(detailPesanan::class, 'pesanan_id', 'id');
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
}
