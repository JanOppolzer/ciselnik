<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        $id = $this->faker->unique()->safeEmail();

        return [
            'name' => "{$this->faker->firstName()} {$this->faker->lastName()}",
            'uniqueid' => $id,
            'email' => $id,
            'emails' => random_int(0, 1) ? "$id;{$this->faker->safeEmail()}" : null,
            'active' => true,
            'admin' => false,
        ];
    }
}
