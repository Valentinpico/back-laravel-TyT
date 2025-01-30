<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        Departamento::create([
            'codigo' => 'DEPT01',
            'nombre' => 'Recursos Humanos',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);

        Departamento::create([
            'codigo' => 'DEPT02',
            'nombre' => 'Tecnología',
            'activo' => true,
            'idUsuarioCreacion' => 1,
        ]);
    }
}