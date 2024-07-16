<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pengguna';
    protected $fillable = [
        'role_id',
        'nama',
        'email',
        'nomor_sip',
    ];
    protected $hidden = [
        'password',
        'otp',
    ];

    public function role_ids()
    {
        return $this->belongsTo(role::class, 'role_id', 'id');
    }
}
