<?php

namespace App\Models;

use Database\Factories\ProductColorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_Color extends Model
{
    use HasFactory;
    protected $fillable= ['color','product_id'];
    protected $table = 'product_color';
//    protected $casts = [
//        'product_id' => 'unsignedBigInteger',
//    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public static function newFactory()
    {
        return ProductColorFactory::new();
    }
}
