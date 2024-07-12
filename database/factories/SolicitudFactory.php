<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Solicitud::class;
    public function definition(): array
    {
        return [
            'fecha_registro' => $this->faker->dateTime(),
            'fecha_confirmacion' => $this->faker->dateTime(),
            'empleado' => $this->faker->randomElement(['Si', 'No']),
            'observaciones' => $this->faker->text(),
            'observacion_publica' => $this->faker->text(),
            'estatus' => $this->faker->randomElement(['Nuevo', 'Rechazado', 'Pendiente', 'Revision', 'Seleccionada', 'Inscripcion', 'Modificada']),
            'tipo' => $this->faker->randomElement(['Empresa', 'Publica', 'Internal', 'Diapora']),
            'cambio' => $this->faker->text,
        ];
    }
}
