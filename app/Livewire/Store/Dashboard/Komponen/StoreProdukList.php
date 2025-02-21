<?php

namespace App\Livewire\Store\Dashboard\Komponen;

use App\Models\Produk;
use Livewire\Component;

class StoreProdukList extends Component
{
    public function render()
    {
        return view('livewire.store.dashboard.komponen.store-produk-list',[
            'produks_list'=>Produk::paginate(24)
        ]);
    }
}
