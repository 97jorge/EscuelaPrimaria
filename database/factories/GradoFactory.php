<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profesor_id'=> $this->faker->numberBetween(1,100),
            'nombreGrado'=> $this->faker->randomElement($array = array ('Primero','Segundo','Tercero'
            ,'Cuarto',' Quinto','Sexto')),
            'clases'=> $this->faker->numberBetween(5,10),
            'cantidadAlumnos'=> $this->faker->numberBetween(30,40),
            //
        ];
    }
}
