<?php

namespace Database\Seeders;

use App\Models\product_Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_Color_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = product_Color::factory()->count(10)->create();
    }
}
