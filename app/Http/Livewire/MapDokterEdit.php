<?php

namespace App\Http\Livewire;

use App\Models\data_dokter;
use App\Models\spesialisasi;
use App\Models\wilayah;
use Livewire\Component;

class MapDokterEdit extends Component
{
    public function render()
    {
        $data = data_dokter::findOrFail(request()->query('id'))->toArray();
        $spesialisasi = spesialisasi::all();
        $kecamatan = wilayah::all();
        return view('pages.dashboard.admin.kelola-data.edit.edit-kelola-dokter', compact('data', 'spesialisasi', 'kecamatan'));
    }
}
