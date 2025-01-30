<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'usuario',
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'idDepartamento',
        'idCargo',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'idDepartamento');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'idCargo');
    }
}