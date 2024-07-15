<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacto;
class Empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        'provincia_id',
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
    public function  provincia()
    {
        return $this->hasMany(Provincia::class);
    }

    //public function contacto()
    //{
      //  return $this->belongsTo(Contacto::class);
    //}

}
