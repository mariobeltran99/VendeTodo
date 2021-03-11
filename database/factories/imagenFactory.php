<?php

namespace Database\Factories;

use App\Models\imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class imagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'foto' => $this->faker->randomElement(['imagen1.jpg','imagen2.jpg','imagen3.png','imagen4.png']),
            'id_producto' => $this->faker->numberBetween(1,20),
            'principal' => $this->faker->boolean
        ];
    }
}
