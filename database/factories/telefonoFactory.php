<?php

namespace Database\Factories;

use App\Models\telefono;
use Illuminate\Database\Eloquent\Factories\Factory;

class telefonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = telefono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(1,20),
            'telefono' => $this->faker->numberBetween(21000000,79999999)
        ];
    }
}
