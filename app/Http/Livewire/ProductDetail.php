<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\produk;
use Illuminate\Http\Request;


class ProductDetail extends Component
{

    public $produk;


    public function mount($id)
    {
        $produkDetail = produk::find($id);

        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }

    public function masukkanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        //Menghitung Total Harga
        $total_harga = $this->jumlah_pesanan*$this->produk->harga;

        //Ngecek Apakah user punya data pesanan utama yg status nya 0
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //Menyimpan / Update Data Pesanan Utama
        if(empty($pesanan))
        {
            pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);

            $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            $pesanan->kode_pemesanan = 'IT-'.$pesanan->id;
            $pesanan->update();
            $stock = produk::where('id', Auth::user()->id);
            $stock->stok = $stock->stok-$this->jumlah_pesanan;
            $stock->update();

        }else {
            $pesanan->total_harga = $pesanan->total_harga+$total_harga;
            $pesanan->update();
            $stock = produk::where('id', Auth::user()->id);
            $stock->stok = $stock->stok-$this->jumlah_pesanan;
            $stock->update();
        }

        //Meyimpanan Pesanan Detail
        detailPesanan::create([
            'product_id' => $this->produk->id,
            'pesanan_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga'=> $total_harga
        ]);

        $this->emit('masukKeranjang');

        session()->flash('message', 'Sukses Masuk Keranjang');

        return redirect()->back();


    }

    public function render()
    {
        
        return view('livewire.product-detail');
    }
}
