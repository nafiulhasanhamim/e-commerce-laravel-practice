<?php

namespace App\Models;

use Database\Factories\ProductSizeFactory;
use Database\Seeders\Product_Size_Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_Size extends Model
{
    use HasFactory;
    protected $fillable = ['size','product_id'];
    protected $table = 'product_size';
//    protected $casts = [
//        'product_id' => 'unsignedBigInteger',
//    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public static function newFactory()
    {
        return ProductSizeFactory::new();
    }
}
