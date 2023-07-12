<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $this->faker->sentence(),
            'description'   => $this->faker->paragraph(),
            'is_paid'       => $this->faker->boolean(),
            'price'         => $this->faker->numberBetween(0, 1000),
            'start_at'      => $this->faker->dateTimeBetween('+0 days','+0 days'),
            'end_at'        => $this->faker->dateTimeBetween('+1 days','+1 month'),
            'category_id'   => category::all()->random()->id,
            'user_id'       => User::all()->random()->id,
            'status'        => $this->faker->randomElement([
                "approved",
                "pending",
                "rejected",
            ]),
        ];
    }
}
