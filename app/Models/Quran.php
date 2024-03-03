<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    protected $fillable = [
        'name',
        'name_translations',
    ];

    protected $casts = [
        'name_translations' => 'array',
    ];
}
