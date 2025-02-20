<?php

namespace App\Livewire\Store\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.store')]
#[Title('Dashboard')]
class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.store.dashboard.dashboard-index');
    }
}
