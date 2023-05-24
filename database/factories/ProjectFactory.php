<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();

        return [
            'category' => fake()->randomElement(['Simulación', 'Diseño Web', 'Animación']),
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'resume' => fake()->paragraph(),
            'description' => fake()->paragraph(),
            'image' => "avatar1.png",
            'video' => "flores.mp4",
            'git' => "https://github.com/",
        ];
    }
}