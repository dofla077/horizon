<?php

namespace App\Models;

use App\Models\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperPatient
 */
class Patient extends Model
{
    use HasFactory, SoftDeletes, HasUser;

    /**
     * Professionals
     *
     * @return BelongsToMany
     */
    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(Professional::class,'patients_professionals');
    }

    /**
     * Activities
     *
     * @return BelongsToMany
     */
    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class,'patients_activities');
    }
}
