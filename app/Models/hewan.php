<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hewan extends Model
{
    use HasFactory;
    public function produk()
    {
        return $this->hasMany(produk::class, 'hewan_id', 'id');
    }
}
