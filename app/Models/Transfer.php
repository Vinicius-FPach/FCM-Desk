<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transfer extends Model
{
    protected $fillable = [
        'value',
        'originTeam',
        'destinyTeam',
    ];

    public function player(): HasOne 
    {
        return $this->hasOne(Player::class);
    }

}
