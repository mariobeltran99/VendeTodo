<?php

namespace Database\Factories;

use App\Models\denuncia;
use Illuminate\Database\Eloquent\Factories\Factory;

class denunciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = denuncia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario_denunciado' => $this->faker->numberBetween(1,20),
            'motivo' => $this->faker->paragraph,
            'vista' => $this->faker->boolean
        ];
    }
}
