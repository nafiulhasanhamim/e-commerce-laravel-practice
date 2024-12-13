<?php

namespace Database\Factories;

use App\Models\Order_Item;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Order_ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order_Item::class;
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'product_id' => Products::factory(),
            'product_name' => $this->faker->words(3, true),
            'order_status' => $this->faker->randomElement(['pending', 'shipped', 'delivered']),
            'qty' => $this->faker->numberBetween(1, 5),
        ];
    }
}

