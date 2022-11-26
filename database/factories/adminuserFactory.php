<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class adminuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->word(),
            'email' => $this->faker->email(),
            'password' => $this->faker->name(),
            
            
        ];
    }
}
