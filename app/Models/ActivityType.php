<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperActivityType
 */
class ActivityType extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Activities
     *
     * @return HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
