<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerComp extends Model
{
    protected $fillable = [
        'goal',
        'assist',
        'cleanSheet',
        'rating',
    ];
}
