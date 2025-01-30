<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'usuario' => 'admin',
            'primerNombre' => 'Admin',
            'primerApellido' => 'User',
            'idDepartamento' => 1,
            'idCargo' => 1,
        ]);

        User::create([
            'usuario' => 'dev',
            'primerNombre' => 'Developer',
            'primerApellido' => 'User',
            'idDepartamento' => 2,
            'idCargo' => 2,
        ]);
    }
}
