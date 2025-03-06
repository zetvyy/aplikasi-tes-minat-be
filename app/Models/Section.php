<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Section extends Model
{
    protected $fillable = [
        'name',
    ];

    // fungsi agar mamsukkan secara ototmatis user id yang ter relasi dengan sectuion
    protected static function booted()
    {
        static::creating(function ($section) {
            $section->user_id = Auth::id();
        });
    }
 

    public function testMinatInstrument(): BelongsTo
    {
        return $this->belongsTo(TesMinatInstrumen::class);
    }
}
