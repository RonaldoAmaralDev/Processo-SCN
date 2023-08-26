<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'cpf' => '123.456.789-00',
            'dt_nascimento' => now(),
            'sexo' => 'M',
            'endereco' => 'Rua Teste, 123',
            'cidade' => 'Belo Horizonte',
            'uf' => 'Minas Gerais',
        ];
    }

}
