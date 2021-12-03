<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'grado_id' => $this->faker->numberBetween(1,100),
            'nombre' => $this->faker->name(),
            'edad' => $this->faker->numberBetween(5,15),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'ciudad' => $this->faker->city(),

        ];
    }
}
