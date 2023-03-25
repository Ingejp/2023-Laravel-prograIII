<?php

namespace Database\Factories;

use App\Models\Camion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CamionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $camion=Camion::class;
    public function definition()
    {
        return [
            'placa_camion'=>$this->faker->text(5),
            'modelo'=>$this->faker->numberBetween(2,20),
            'marca'=>$this->faker->text(10),
            'color'=>$this->faker->text(10),
            'capacidad_toneladas'=>$this->faker->numberBetween(2,10),
            'transporte_id'=>$this->faker->unique()->numberBetween(1,100),

        ];
    }
}
