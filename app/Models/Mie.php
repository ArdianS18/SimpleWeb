<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mie extends Model
{
    use HasFactory;

    /**
     * Get the level that owns the Mie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the category that owns the Mie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the  for the Mie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_mies(): HasMany
    {
        return $this->hasMany(Order_mie::class, 'foreign_key', 'local_key');
    }
}
