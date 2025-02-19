<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Sales')]

class DashboardSales extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard-sales');
    }
}
