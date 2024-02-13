<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Symptom extends Model
{
    use HasFactory;

    /**
     * Get all of the mies for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patient_syms(): HasMany
    {
        return $this->hasMany(Patient_sym::class, 'foreign_key', 'local_key');
    }
}
