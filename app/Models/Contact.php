<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_meadia',
        'icon',
        'key',
        'value',
    ];

    protected $casts = [
        'is_link' => 'boolean',
    ];
}
