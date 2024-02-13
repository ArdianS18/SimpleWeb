<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    /**
     * Get all of the patient_syms for the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patient_syms(): HasMany
    {
        return $this->hasMany(Patient_sym::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the patient_sym associated with the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient_sym(): HasOne
    {
        return $this->hasOne(Patient_sym::class, 'foreign_key', 'local_key');
    }
}
