<?php

namespace Database\Factories;

use App\Models\TopUp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopUp>
 */
class TopUpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TopUp::class;
    public function definition(): array
    {
        return [
            'game_id' => $this->faker->numberBetween(1, 14),
            'nominal' => $this->faker->numberBetween(5, 5000),
            'price' => $this->faker->numberBetween(1500, 1000000)
        ];
    }
}