<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Universe extends Model
{
    protected $table = 'universe';

    protected $fillable = ['universe', 'company', 'edge'];

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}