<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargoSeeder extends Seeder
{
    public function run()
    {
        Cargo::create([
            'codigo' => 'CARG01',
            'nombre' => 'Gerente de Recursos Humanos',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Cargo::create([
            'codigo' => 'CARG02',
            'nombre' => 'Desarrollador Senior',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);
    }
}