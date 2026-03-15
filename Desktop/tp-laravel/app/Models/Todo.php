<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'completed',
        'priority',
        'timestamp',
    ];

    protected $casts = [
        'completed' => 'boolean',
        'timestamp' => 'datetime',
    ];
}
