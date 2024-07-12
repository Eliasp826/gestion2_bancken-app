<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_registro',
        'fecha_confirmacion',
        'empleado',
        'observaciones',
        'observacion_publica',
        'estatus',
        'tipo',
        'cambios',
    ];


    public function Participante()
    {
        return $this->belongsTo(Participante::class);
    }

    public function Inscripcion()
    {
        return $this->belongsTo(Inscripcion::class);
    }

   // public function Programaciones()
    //{
      //  return $this->belongsTo(programaciones::class);
    //}
}
