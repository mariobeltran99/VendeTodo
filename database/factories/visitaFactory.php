<?php

namespace Database\Factories;

use App\Models\visita;
use Illuminate\Database\Eloquent\Factories\Factory;

class visitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = visita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->numberBetween(1, 20),
            'ip' => $this->faker->ipv4()
        ];
    }
}
