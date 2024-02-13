<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orderer extends Model
{
    use HasFactory;

    /**
     * Get all of the orders for the Orderer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'foreign_key', 'local_key');
    }

    /**
     * Get the Order associated with the Orderer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Order(): HasOne
    {
        return $this->hasOne(Order::class, 'foreign_key', 'local_key');
    }
}
