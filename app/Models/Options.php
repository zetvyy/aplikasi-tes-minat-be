<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Options extends Model
{
    protected $fillable = [
        'option_text',
        'is_correct',
        'tes_minat_instrumen_id'
    ];

    public function TesMinatInstrumen(): BelongsTo
    {
        return $this->belongsTo(TesMinatInstrumen::class);
    }

    public function testResults(): HasMany
    {
        return $this->hasMany(TestResults::class);
    }
}
