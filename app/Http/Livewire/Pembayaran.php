<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\produk;
use App\Models\riwayat_penjualan;
use Illuminate\Http\Request;

class Pembayaran extends Component
{
    public $produk;

    public function mount($id)
    {
        $produkDetail = produk::find($id);

        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }

    public function render(Request $request)
    {
        
        return view('livewire.pembayaran', [
            'jumlah_pesanan' => $request->input('jumlah_pesanan')
        ]);
    }

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
