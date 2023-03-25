<?php

namespace Database\Factories;

use App\Models\Transporte;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $transporte = Transporte::class;
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'razon_social'=>$this->faker->text(10),
            //'razon_social'=>$this->faker->unique()->numberBetween(1,100),
        ];
    }
}
