<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class productoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(1, 20),
            'id_categoria' => $this->faker->numberBetween(1, 20),
            'nombre' => $this->faker->sentence(),
            'precio' => $this->faker->numberBetween(1, 60),
            'descripcion' => $this->faker->paragraph(),
            'existencia' => $this->faker->numberBetween(0, 6)
        ];
    }
}
