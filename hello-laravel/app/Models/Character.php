<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    protected $fillable = ['name', 'real_name', 'gender', 'universe_id'];

    public function universe(): BelongsTo
    {
        return $this->belongsTo(Universe::class);
    }
}