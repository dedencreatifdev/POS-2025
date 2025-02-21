<?php

namespace App\Livewire\Store\Dashboard\Komponen;

use App\Models\Merk;
use Livewire\Component;

class KategoryButton extends Component
{
    public function render()
    {
        return view('livewire.store.dashboard.komponen.kategory-button',[
            'merk' => Merk::all()
        ]);
    }
}
