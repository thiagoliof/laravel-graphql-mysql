<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Game extends Model
{

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
