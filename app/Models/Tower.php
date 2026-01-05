<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $fillable = [
        'tower_code',
        'tower_name',
        'location',
        'latitude',
        'longitude',
        'owner',
        'tower_type',
        'status',
        'remarks',
    ];
}


