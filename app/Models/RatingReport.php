<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingReport extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the productRating that owns the RatingReport
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productRating(): BelongsTo
    {
        return $this->belongsTo(ProductRating::class);
    }
}
