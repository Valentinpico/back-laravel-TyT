<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargoSeeder extends Seeder
{
    public function run()
    {
        Cargo::create([
            'codigo' => 'CARG02',
            'nombre' => 'Desarrollador Backend',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG03',
            'nombre' => 'Analista de Datos',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG04',
            'nombre' => 'Director de Tecnología',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG05',
            'nombre' => 'Coordinador de Marketing',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG06',
            'nombre' => 'Ejecutivo de Ventas',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG07',
            'nombre' => 'Director de Ventas',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

    }
}