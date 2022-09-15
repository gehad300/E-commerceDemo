<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the favourited for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favourites(): HasMany
    {
        return $this->hasMany(Favourite::class);
    }
    /**
     * Get all of the rproductRatings for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productRatings(): HasMany
    {
        return $this->hasMany(ProductRating::class);
    }
}
