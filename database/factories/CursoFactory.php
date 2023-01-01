<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    protected $model= Curso::class;

    public function definition()
    {
        return [
            'codigoC' => $this->faker->numberBetween(2300, 3000), 
            'areaC' => $this->faker->randomElement(['General', 'Especifico', 'Especialidad']),
            'nombre' => $this->faker->sentence(),
            'cicloC'=> $this->faker->randomElement(['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X']), 
            'tipoC'=> $this->faker->randomElement(['Obligatorio', 'Electivo']), 
            'horasP'=> $this->faker-> numberBetween(2, 4), 
            'horasT'=> $this->faker->numberBetween(2, 4), 
            'horasTotales'=> $this->faker->numberBetween(4,6)
        ];
    }
}
