<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class pengguna extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'pengguna';
    protected $fillable = [
        'role_id',
        'nama',
        'email',
        'nomor_sip',
        'otp'
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
