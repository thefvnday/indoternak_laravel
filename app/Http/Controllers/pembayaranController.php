<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\riwayat_penjualan;

class pembayaranController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        riwayat_penjualan::create([
            'nama_produk'=> $request->input('namaBarang'),
            'total_harga'=> $request->input('totalHarga')
        ]);

        return redirect ('/');
    }
}
