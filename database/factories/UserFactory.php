<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
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
            'email' => 'teste@teste.com.br',
            'password' => '$2a$12$tVO9tU/FhOOngaWHnMNXVOI.eUvAvM5Y2NbYgWiLTMuPdISFzhENK', 
            'remember_token' => Str::random(10),
        ];
    }

}
