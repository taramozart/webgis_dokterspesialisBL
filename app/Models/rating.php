<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{

    protected $table = 'rating';

    use HasFactory, HasUuids;
    protected $fillable = [
        'nilai',
        'keterangan',
    ];
    
}
