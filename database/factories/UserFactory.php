<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('Password1'),
            'profile' => $this->randomImage(),
            'bio' => fake()->realText(100),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function randomImage()
    {
        $images = [
            'images/profiles/author1.jpg',
            'images/profiles/author2.jpg',
            'images/profiles/author3.jpg',
            'images/profiles/author4.jpg',
            'images/profiles/author5.jpg',
            'images/profiles/author6.jpg',
            'images/profiles/author7.jpg',
            'images/profiles/author8.jpg',
            'images/profiles/author9.jpg',
            'images/profiles/author10.webp',
        ];

        // Select a random index from the array
        $randomIndex = array_rand($images);

        // Retrieve the value corresponding to the random index
        $randomValue = $images[$randomIndex];

        return $randomValue;
    }
}