<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
    protected $fillable = [
        'site_id',
        'message',
        'url',
        'data',
    ];

    protected $casts = [
        'resolved' => 'boolean',
        'data' => 'array',
    ];
}
