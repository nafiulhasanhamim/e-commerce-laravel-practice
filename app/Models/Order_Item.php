<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'order_status',
        'qty',
    ];

    protected $casts = [
        // 'order_id' => 'unsignedBigInteger',
        // 'product_id' => 'unsignedBigInteger',
        // 'qty' => 'unsignedBigInteger',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class); // Adjust the class name as needed
    }

    public function product()
    {
        return $this->belongsTo(Products::class); // Adjust the class name as needed
    }

    // (Optional) Add other methods as needed:
    // public function getPriceAttribute()
    // {
    //     // Assuming a "price" attribute on the Product model
    //     return $this->product->price * $this->quantity;
    // }

    // ...
}
