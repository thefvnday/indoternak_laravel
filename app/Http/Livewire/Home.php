<?php

namespace App\Http\Livewire;

use App\Models\hewan;
use App\Models\produk;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => produk::take(4)->get(),
            'hewans' => hewan::all()
        ]);
    }
}

