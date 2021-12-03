<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
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
            'edad' => $this->faker->numberBetween(20,100),
            'identidad' => $this->faker->numerify('####-####-#####'),
            'telefono' => $this->faker->phoneNumber(),
            'ciudad' => $this->faker->city(),


          /*  $table->unsignedBigInteger('grado_id');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('identidad');
            $table->string('telefono');
            $table->string('ciudad'); */

            //
        ];
    }
}
