<?php

namespace App\Livewire\Admin\Produk\Komponen;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukList extends Component
{
    use WithPagination;

    public function render()
    {
        return view(
            'livewire.admin.produk.komponen.produk-list',
            [
                'produks' => Produk::paginate(20)
            ]
        );
    }
}
