<?php

namespace App\Http\Livewire;

use App\Models\spesialisasi;
use App\Models\wilayah;
use Livewire\Component;

class MapAdminDataBaru extends Component
{
    public $latitude, $longitude;
    public function render()
    {
        $spesialisasi = spesialisasi::all();
        $kecamatan = wilayah::all();
        return view('pages.dashboard.admin.data-baru.data-baru-dokter', compact('spesialisasi', 'kecamatan'));
    }
}
