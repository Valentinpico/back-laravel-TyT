<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'usuario' => 'juanperez',
            'primerNombre' => 'Juan',
            'primerApellido' => 'Perez',
            'idDepartamento' => 1,
            'idCargo' => 2,
        ]);

        User::create([
            'usuario' => 'mariagonzalez',
            'primerNombre' => 'Maria',
            'primerApellido' => 'Gonzalez',
            'idDepartamento' => 2,
            'idCargo' => 3,
        ]);

        User::create([
            'usuario' => 'carloslopez',
            'primerNombre' => 'Carlos',
            'primerApellido' => 'Lopez',
            'idDepartamento' => 3,
            'idCargo' => 4,
        ]);

        User::create([
            'usuario' => 'luissanchez',
            'primerNombre' => 'Luis',
            'primerApellido' => 'Sanchez',
            'idDepartamento' => 1,
            'idCargo' => 5,
        ]);

        User::create([
            'usuario' => 'patriciamartinez',
            'primerNombre' => 'Patricia',
            'primerApellido' => 'Martinez',
            'idDepartamento' => 2,
            'idCargo' => 6,
        ]);

        User::create([
            'usuario' => 'pedrogarcia',
            'primerNombre' => 'Pedro',
            'primerApellido' => 'Garcia',
            'idDepartamento' => 1,
            'idCargo' => 2,
        ]);

        User::create([
            'usuario' => 'luismarquez',
            'primerNombre' => 'Luis',
            'primerApellido' => 'Marquez',
            'idDepartamento' => 3,
            'idCargo' => 4,
        ]);

        User::create([
            'usuario' => 'rachelrodriguez',
            'primerNombre' => 'Rachel',
            'primerApellido' => 'Rodriguez',
            'idDepartamento' => 2,
            'idCargo' => 5,
        ]);

        User::create([
            'usuario' => 'jaimemendoza',
            'primerNombre' => 'Jaime',
            'primerApellido' => 'Mendoza',
            'idDepartamento' => 1,
            'idCargo' => 1,
        ]);

        User::create([
            'usuario' => 'aliciacastillo',
            'primerNombre' => 'Alicia',
            'primerApellido' => 'Castillo',
            'idDepartamento' => 3,
            'idCargo' => 6,
        ]);

        User::create([
            'usuario' => 'ricardorivas',
            'primerNombre' => 'Ricardo',
            'primerApellido' => 'Rivas',
            'idDepartamento' => 2,
            'idCargo' => 3,
        ]);

        User::create([
            'usuario' => 'julianfernandez',
            'primerNombre' => 'Julian',
            'primerApellido' => 'Fernandez',
            'idDepartamento' => 1,
            'idCargo' => 4,
        ]);

        User::create([
            'usuario' => 'angelacampos',
            'primerNombre' => 'Angela',
            'primerApellido' => 'Campos',
            'idDepartamento' => 3,
            'idCargo' => 2,
        ]);

        User::create([
            'usuario' => 'manuelgomez',
            'primerNombre' => 'Manuel',
            'primerApellido' => 'Gomez',
            'idDepartamento' => 2,
            'idCargo' => 4,
        ]);

        User::create([
            'usuario' => 'sofiahernandez',
            'primerNombre' => 'Sofia',
            'primerApellido' => 'Hernandez',
            'idDepartamento' => 1,
            'idCargo' => 5,
        ]);

        User::create([
            'usuario' => 'pablomartinez',
            'primerNombre' => 'Pablo',
            'primerApellido' => 'Martinez',
            'idDepartamento' => 2,
            'idCargo' => 1,
        ]);

        User::create([
            'usuario' => 'estebantorres',
            'primerNombre' => 'Esteban',
            'primerApellido' => 'Torres',
            'idDepartamento' => 3,
            'idCargo' => 5,
        ]);

        User::create([
            'usuario' => 'carolinaperez',
            'primerNombre' => 'Carolina',
            'primerApellido' => 'Perez',
            'idDepartamento' => 1,
            'idCargo' => 6,
        ]);

        User::create([
            'usuario' => 'sergiomartinez',
            'primerNombre' => 'Sergio',
            'primerApellido' => 'Martinez',
            'idDepartamento' => 2,
            'idCargo' => 2,
        ]);

        User::create([
            'usuario' => 'elizabethgonzalez',
            'primerNombre' => 'Elizabeth',
            'primerApellido' => 'Gonzalez',
            'idDepartamento' => 1,
            'idCargo' => 3,
        ]);

    }
}
