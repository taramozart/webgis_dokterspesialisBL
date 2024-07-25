<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_pengajuan extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'jenis_pengajuan';

    protected $fillable = [
        'keterangan',
    ];
}
