<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama','harga','stok','hewan_id','gambar'];

    public function hewan()
    {
        return $this->belongsTo(hewan::class, 'hewan_id', 'id');
    }


}
