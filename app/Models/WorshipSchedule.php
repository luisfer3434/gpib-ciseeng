<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorshipSchedule extends Model
{
    protected $fillable = [
        'title',
        'day',
        'time',
        'location',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
