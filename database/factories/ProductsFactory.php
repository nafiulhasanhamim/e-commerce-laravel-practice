<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'mrp' => fake()->randomFloat(2,0,1000),
            'saleprice' => fake()->randomFloat(2,0,1000),
            'qty' => fake()->numberBetween(0,1000),
            'brand_id' => Brand::all()->random()->id,
            'description' => fake()->text(200),
            'img' => 'img/air-force-1.png',
            'category' => fake()->text(10),
        ];
    }
}
