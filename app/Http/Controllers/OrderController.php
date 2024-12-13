<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_index()
    {
        return view('order');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
