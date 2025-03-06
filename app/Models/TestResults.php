<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestResults extends Model
{
    //
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function TesMinatInstrumen(): BelongsTo
    {
        return $this->belongsTo(TesMinatInstrumen::class);
    }

    public function selectedOption(): BelongsTo
    {
        return $this->belongsTo(Options::class, 'option_id');
    }
}
