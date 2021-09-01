<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\hewan;
use App\Models\produk;
use Livewire\WithPagination;

class ProductHewan extends Component
{
    use WithPagination;

    public $hewan;
        
    

    public function mount($hewanId)
    {
        $hewanDetail = hewan::find($hewanId);

        if($hewanDetail) {
            $this->hewan = $hewanDetail;
        }
    }

    public function render()
    {
        
        
        $products = produk::where('hewan_id', $this->hewan->id)->paginate(8);
        

        return view('livewire.product-hewan', [
            'products' => $products,
            'title' => 'Produk Hasil Ternak '.$this->hewan->nama_hewan
        ]);
    }
}
