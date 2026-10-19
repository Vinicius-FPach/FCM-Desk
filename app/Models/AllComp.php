<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllComp extends Model
{
    protected $fillable = [
        'wins',
        'draws',
        'loses',
    ];
}
