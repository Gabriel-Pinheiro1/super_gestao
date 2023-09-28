<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContact>
 */
class SiteContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'email' => fake()->unique()->email(),
            'phone' => fake()->tollFreePhoneNumber(),
            'contact_reason' => fake()->numberBetween(1,3),
            'message' => fake()->text(300)
        ];
    }
}
