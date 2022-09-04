<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperGrade
 */
class Grade extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Manulexs
     *
     * @return BelongsToMany
     */
    public function manulexs(): BelongsToMany
    {
        return $this->belongsToMany(Manulex::class, 'manulexs_grades');
    }
}
