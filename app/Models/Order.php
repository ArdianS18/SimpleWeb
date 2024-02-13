<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the mie that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mie(): BelongsTo
    {
        return $this->belongsTo(Mie::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the Orderer that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Orderer(): BelongsTo
    {
        return $this->belongsTo(Orderer::class, 'foreign_key', 'other_key');
    }

    /**
     * Get all of the order_mies for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_mies(): HasMany
    {
        return $this->hasMany(Order_mie::class, 'foreign_key', 'local_key');
    }
}
