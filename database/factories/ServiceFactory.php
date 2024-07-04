<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ['en' => $this->faker->word, 'ru' => $this->faker->word],
            'description' => ['en' => $this->faker->sentence, 'ru' => $this->faker->sentence],
            'icon' => $this->faker->word,
            'is_active' => $this->faker->boolean,
        ];
    }
}
