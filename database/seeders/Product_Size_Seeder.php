<?php

namespace Database\Seeders;

use App\Models\product_Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_Size_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = product_Size::factory()->count(20)->create();
    }
}
