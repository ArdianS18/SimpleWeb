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
     * Get all of the order_mies for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_doctors(): HasMany
    {
        return $this->hasMany(Order_doctor::class, 'foreign_key', 'local_key');
    }
}
