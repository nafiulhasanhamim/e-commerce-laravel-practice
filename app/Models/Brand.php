<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name','url'];
    protected $table = 'brand';

    public function Product()
    {
        return

            $this->hasMany(Products::class, 'brand_id'); // Adjust the class name as needed
    }

    // (Optional) Add other methods as needed:
    // public function getActiveProductsCountAttribute()
    // {
    //     return $this->products()->where('is_active', true)->count();
    // }

    // ...
}


