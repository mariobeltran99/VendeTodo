<?php

namespace Database\Factories;

use App\Models\captura;
use Illuminate\Database\Eloquent\Factories\Factory;

class capturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = captura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_denuncia' => $this->faker->numberBetween(1,20),
            'foto' => $this->faker->randomElement(['imagen1.jpg','imagen2.jpg','imagen3.png','imagen4.png'])
        ];
    }
}
