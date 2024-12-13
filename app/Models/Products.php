<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'mrp',
        'saleprice',
        'qty',
        'brand_id',
        'description',
        'size',
        'color',
        'category',
    ];
    protected $casts = [
        'brand_id' => 'integer',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class); // Adjust the class name as needed
    }

    public function scopeOrderByPriceAsc($query)
    {
        return $query->orderBy('saleprice', 'asc');
    }

    public function scopeOrderByPriceDesc($query)
    {
        return $query->orderBy('saleprice', 'desc');
    }

    public function scopeOrderByNameAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopeOrderByNameDesc($query)
    {
        return $query->orderBy('name', 'desc');
    }

    public function scopeFilterByPriceRange($query, $minPrice = null, $maxPrice = null)
    {
        // Ensure minimum price is at least 0
        $minPrice = max(0, $minPrice);

        // Ensure maximum price is capped at 9999
        $maxPrice = min(9999, $maxPrice);

        if ($minPrice && $maxPrice) {
            return $query->whereBetween('saleprice', [$minPrice, $maxPrice]);
        } elseif ($minPrice) {
            return $query->where('saleprice', '>=', $minPrice);
        } elseif ($maxPrice) {
            return $query->where('saleprice', '<=', $maxPrice);
        }

        return $query; // Return the original query if no price range is provided
    }

    //    public function img()
    //    {
    //        return $this->hasOne(Product_Img::class);
    //    }

    // (Optional) Add other methods as needed:
    // public function getProfitAttribute()
    // {
    //     return $this->mrp - $this->saleprice;
    // }

    // ...
}
