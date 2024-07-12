<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacto;
class Empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_empresa',
        'direccion',
        'telefono',
        'celular',
        'extension',
        'correo_electronico',
        'url',
        'rnc',
        'observaciones',
        'fecha_registro',
        'estatus',
        'cambios',
    ];

    // Relaciones de tablas
    //public function  reservaciones()
    //{
      //  return $this->hasMany(Reservaciones::class);
    //}

    //public function contacto()
    //{
      //  return $this->belongsTo(Contacto::class);
    //}

}
