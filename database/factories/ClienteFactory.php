<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->unique()->numerify('########'),
            'celular'=> $this->faker->unique()->numerify('9########'),
            'fecha_nacimiento'=>$this->faker->date('Y-m-d', '2023-01-01'),
            'direccion'=>$this->faker->address,
            'correo'=>$this->faker->unique()->safeEmail,
        ];
    }
}
