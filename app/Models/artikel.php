<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'artikel';

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'sumber',
        'penulis'
    ];
}
