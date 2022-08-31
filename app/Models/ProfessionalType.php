<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperProfessionalType
 */
class ProfessionalType extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Professionals
     *
     * @return HasMany
     */
    public function professionals(): HasMany
    {
        return $this->hasMany(Professional::class);
    }
}
