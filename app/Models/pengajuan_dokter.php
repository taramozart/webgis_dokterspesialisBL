<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_dokter extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pengajuan_dokter';

    protected $fillable = [
        'pengajuan_dokter_sebelumnya_id',
        'pengguna_id',
        'jenis_pengajuan_id',
        'status_pengajuan_id',
        'nama',
        'bidang_spesialisasi',
        'nomor_kontak',
        'nomor_sip',
        'jadwal',
        'kecamatan',
        'alamat',
        'link_map',
        'gambar',
    ];

    public function pengguna_ids()
    {
        return $this->belongsTo(pengguna::class, 'pengguna_id', 'id');
    }

    public function pengajuan_dokter_sebelumnya_ids()
    {
        return $this->belongsTo(pengajuan_dokter_sebelumnya::class, 'pengajuan_dokter_sebelumnya_id', 'id');
    }
    
    public function jenis_pengajuan_ids()
    {
        return $this->belongsTo(jenis_pengajuan::class, 'jenis_pengajuan_id', 'id');
    }
    
    public function status_pengajuan_ids()
    {
        return $this->belongsTo(status_pengajuan::class, 'status_pengajuan_id', 'id');
    }
    
    public function bidang_spesialisasis()
    {
        return $this->belongsTo(spesialisasi::class, 'bidang_spesialisasi');
    }
    
    public function kecamatans() 
    {
        return $this->belongsTo(wilayah::class, 'kecamatan');
    }
}
