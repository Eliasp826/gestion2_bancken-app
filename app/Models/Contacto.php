<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresas;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresas_id',
        'nombres',
        'apellidos',
        'sexo',
        'cargo',
        'correo_electronico',
        'correo_electronico2',
        'telefono',
        'telefono2',
        'extension',
        'celular',
        'fecha_nacimiento',
        'fecha_ingreso',
        'estatus',
        'cambios'
        ];

    // Accesores y Mutators (opcionales)


    // relaciones de tablas
    public function empresas()
    {
        return $this->hasMany(Empresas::class);
    }
}
