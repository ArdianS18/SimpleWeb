<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_mie extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($order_mie) {
            $mie = $order_mie->mie;
            $total = $order_mie->order_quantity * $mie->price;

            $order_mie->total = $total;
        });
    }


    /**
     * Get the mie that owns the Order_mie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mie(): BelongsTo
    {
        return $this->belongsTo(Mie::class, 'foreign_key', 'other_key');
    }

    /**
     * Get the order that owns the Order_mie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'foreign_key', 'other_key');
    }


}
