<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pass = md5("1234");
        return [
            'nombre_usuario' => $this->faker->unique()->safeEmail,
            'nombre' => $this->faker->name,
            'clave' => $pass,
            'foto' => $this->faker->randomElement(['profileDefault.png']),
            'activo' => $this->faker->boolean,
            'rol' => $this->faker->randomElement(['a', 'u']),
            'departamento' => $this->faker->randomElement(['San Salvador', 'San Vicente', 'La Paz', 'San Miguel']),
            'token' => $this->faker->regexify('[A-Za-z0-9]{100}')
        ];
    }
}
