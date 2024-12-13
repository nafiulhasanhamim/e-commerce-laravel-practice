<?php

namespace Database\Factories;

use App\Models\product_Size;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = product_Size::class;
    public function definition(): array
    {
        $sizes = ['7','8','9','10','13'];
        return [
            'size' => fake()->randomElement($sizes),
            'product_id' => Products::factory()
        ];
    }
}
