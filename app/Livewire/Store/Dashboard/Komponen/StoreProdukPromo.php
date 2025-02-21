<?php

namespace App\Livewire\Store\Dashboard\Komponen;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class StoreProdukPromo extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.store.dashboard.komponen.store-produk-promo', [
            'produks_promo' => Produk::paginate(24)
        ]);
    }
}
