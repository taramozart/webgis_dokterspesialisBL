<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating_pengguna extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'rating_pengguna';

    protected $fillable = [
        'pengguna_id',
        'data_dokter_id',
        'rating_id',
    ];

    public function pengguna_ids()
    {
        return $this->belongsTo(pengguna::class, 'pengguna_id', 'id');
    }

    
    public function data_dokter_ids()
    {
        return $this->belongsTo(data_dokter::class, 'data_dokter_id', 'id');
    }

    public function rating_ids()
    {
        return $this->belongsTo(rating::class, 'rating_id', 'id');
    }
}
