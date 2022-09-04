<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperManulex
 */
class Manulex extends Model
{
    protected $table = 'manulexs';

    use HasFactory, SoftDeletes;

    /**
     * Grades
     *
     * @return BelongsToMany
     */
    public function grades(): BelongsToMany
    {
        return $this->belongsToMany(Grade::class, 'manulexs_grades');
    }
}
