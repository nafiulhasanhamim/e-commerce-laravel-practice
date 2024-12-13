<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Assuming you have users with IDs 1 to 10
            'total' => $this->faker->randomFloat(2, 50, 500),
            'shipping' => $this->faker->randomFloat(2, 5, 50),
            'payment_gateway' => $this->faker->randomElement(['paypal', 'credit_card']),
            'status' => $this->faker->randomElement(['pending', 'shipped', 'delivered']),

        ];
    }
}
