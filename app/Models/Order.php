<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
