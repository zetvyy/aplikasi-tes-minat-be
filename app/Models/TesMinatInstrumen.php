<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TesMinatInstrumen extends Model
{
    protected $fillable = [
        'label',
        'section_id'
    ];

    public function options(): HasMany
    {
        return $this->hasMany(Options::class);
    }

    public function testResults(): HasMany
    {
        return $this->hasMany(TestResults::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
