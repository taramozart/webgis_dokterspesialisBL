<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'wilayah';
    protected $fillable = [
        'keterangan',
    ];
}
