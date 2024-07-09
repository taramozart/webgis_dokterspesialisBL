<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MapAdminDataBaru extends Component
{
    public $latitude, $longitude;
    public function render()
    {
        return view('pages.dashboard.admin.data-baru.data-baru-dokter');
    }
}
