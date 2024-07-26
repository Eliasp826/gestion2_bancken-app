<?php

namespace App\Http\Resources\ContactoResou;

use App\Http\Resources\EmpresasResou\EmpresasResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Empresas;

class ContactoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'sexo' => $this->sexo,
            'cargo' => $this->cargo,
            'correo_electronico' => $this->correo_electronico,
            'correo_electronico2' => $this->correo_electronico2,
            'telefono' => $this->telefono,
            'telefono2' => $this->telefono2,
            'extension' => $this->extension,
            'celular' => $this->celular,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'fecha_ingreso' => $this->fecha_ingreso,
            'estatus' => $this->estatus,
            'cambios' => $this->cambios,
            'empresas' => new EmpresasResource($this->whenLoaded('empresas')),
        ];
    }
}
