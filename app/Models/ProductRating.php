<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductRating extends Model
{
    use HasFactory;



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the ratingReport for the ProductRating
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratingReport(): HasMany
    {
        return $this->hasMany(RatingReport::class);
    }
}
