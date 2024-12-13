<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Img extends Model
{
    protected $fillable = ['url', 'product_id'];
    protected $casts = [
        'product_id' => 'unsignedBigInteger',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class); // Adjust the class name as needed

    }

    // (Optional) Add other methods as needed:
    // public function isPrimaryImage()
    // {
    //     return $this->hasOne('App\Models\Product')
    //         ->where('primary_image_id', $this->id)
    //         ->exists();
    // }

    // ...
}
