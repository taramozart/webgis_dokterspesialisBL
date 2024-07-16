<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = 'rating';

    use HasFactory, HasUuids;
    protected $fillable = [
        'id',
        'pengguna_id',
        'data_dokter_id',
    ];

    public function pengguna_ids(){
        return $this->belongsTo(pengguna::class, 'pengguna_id', 'id');
    }

    public function data_dokter_ids(){
        return $this->belongsTo(data_dokter::class, 'data_dokter_id', 'id');
    }
}
