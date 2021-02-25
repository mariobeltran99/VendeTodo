<?php

namespace Database\Factories;

use App\Models\valoracion;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Block\Element\Paragraph;

class valoracionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = valoracion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(1, 20),
            'id_producto' => $this->faker->numberBetween(1, 20),
            'estrellas' => $this->faker->numberBetween(1, 5),
            'comentario' => $this->faker->paragraph()
        ];
    }
}
