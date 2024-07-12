<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresas;

class Reservaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresas_id',
        'cupo',
        'solicitado',
        'disponible',
        'fecha_registro',
        'fecha_vencimiento',
        'estatus',
        'cambios',
        'observacion',
    ];

    public function empresas()
    {
        return $this->belongsTo(empresas::class);
    }
    public function solicitud()
    {
        return $this->belongsTo(solicitud::class);
    }
}
