<?php

namespace Database\Factories;

use App\Models\Kurs;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->randomElement(['blue', 'green', 'red', 'yellow']);
        $text = $this->faker->sentence();

        return [
            'name' => $name,
            'text' => $text
        ];
    }
}
