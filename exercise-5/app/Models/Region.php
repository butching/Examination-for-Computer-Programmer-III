<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'lib_regions';
    protected $primaryKey = 'region_code';
    protected $casts = [
        'region_code' => 'string',
    ];
}
