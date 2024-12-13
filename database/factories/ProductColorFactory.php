<?php

namespace Database\Factories;

use App\Models\product_Color;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = product_Color::class;
    public function definition(): array
    {
        return [
            'color' => fake()->colorName(),
            'product_id' => Products::factory()
        ];
    }
}
