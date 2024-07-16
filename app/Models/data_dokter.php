<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property spesialisasi $bidang_spesialisasi
 * @property wilayah $kecamatan
 * 
 */
class data_dokter extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'data_dokter';

    protected $fillable = [
        'nama',
        'bidang_spesialisasi',
        'nomor_kontak',
        'nomor_sip',
        'jadwal',
        'kecamatan',
        'alamat',
        'latitude',
        'longtitude',
        'gambar',
    ];

    public function bidang_spesialisasis() : BelongsTo
    {
        return $this->belongsTo(spesialisasi::class, 'bidang_spesialisasi');
    }

    public function kecamatans() : BelongsTo
    {
        return $this->belongsTo(wilayah::class, 'kecamatan');
    }
}
