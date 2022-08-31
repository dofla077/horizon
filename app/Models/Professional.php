<?php

namespace App\Models;

use App\Models\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperProfessional
 */
class Professional extends Model
{
    use HasFactory, SoftDeletes, HasUser;

    /**
     * Type
     *
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ProfessionalType::class);
    }

    /**
     * Patients
     *
     * @return BelongsToMany
     */
    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(Patient::class,'patients_professionals');
    }
}
