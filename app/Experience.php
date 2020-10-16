<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $guarded = [];

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];
}
