<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoria;
use App\Models\producto;
use App\Models\usuario;
use App\Models\imagen;

use App\Models\denuncia;
use App\Models\baneo;
use App\Models\captura;


use App\Models\telefono;
use App\Models\valoracion;
use App\Models\visita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        categoria::factory(10)->create();
        usuario::factory(20)->create();
        telefono::factory(20)->create();
        producto::factory(20)->create();
        denuncia::factory(20)->create();
        baneo::factory(3)->create();
        valoracion::factory(50)->create();
        visita::factory(100)->create();
    }
}
