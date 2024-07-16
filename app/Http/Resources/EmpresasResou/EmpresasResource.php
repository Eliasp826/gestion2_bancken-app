<?php

namespace App\Http\Resources\EmpresasResou;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpresasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'empresas_id' => $this->empresas_id,
            'nombre_empresa' => $this->nombre_empresa,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'celular' => $this->celular,
            'extension' => $this->extension,
            'correo_electronico' => $this->correo_electronico,
            'url' => $this->url,
            'rnc' => $this->rnc,
            'observaciones' => $this->observaciones,
            'fecha_registro' => $this->fecha_registro,
            'estatus' => $this->estatus,
            'cambios' => $this->cambios
        ];
    }
}
