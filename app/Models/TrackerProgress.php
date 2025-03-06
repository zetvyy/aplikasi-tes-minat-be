<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrackerProgress extends Model
{
    protected $fillable = [
        'keahlian',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Projects::class);
    }

    public function learningLists(): HasMany
    {
        return $this->hasMany(LearningList::class);
    }
}
