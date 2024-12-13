<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'shipping',
        'payment_gateway',
        'status',
    ];

    protected $casts = [
        // 'user_id' => 'unsignedBigInteger',
        // 'total' => 'decimal',
        // 'shipping' => 'decimal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Adjust the class name as needed
    }

    public function orderItems()
    {
        return $this->hasMany(Order_Item::class, 'order_id'); // Adjust the class name as needed
    }

    // (Optional) Add other methods as needed:
    // public function getTotalWithShippingAttribute()
    // {
    //     return $this->total + $this->shipping;
    // }

    // ...
}


