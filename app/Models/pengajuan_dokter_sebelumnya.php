<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_dokter_sebelumnya extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'pengajuan_dokter_sebelumnya';

    protected $fillable = [
        'nama',
        'bidang_spesialisasi',
        'nomor_kontak',
        'kecamatan',
        'alamat',
    ];

    public function bidang_spesialisasis()
    {
        return $this->belongsTo(spesialisasi::class, 'bidang_spesialisasi');
    }
    
    public function kecamatans() 
    {
        return $this->belongsTo(wilayah::class, 'kecamatan');
    }
}
