<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ternak extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_ternak','kapasitas','produk_perhari','konsumsi_perhari'];
}
