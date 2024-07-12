<?php

namespace Database\Factories;

use App\Models\Reservaciones;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservaciones>
 */
class ReservacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Reservaciones::class;
    public function definition(): array
    {
        return [
            'empresas_id' => Empresas::factory(),
            'cupo' => $this->faker->randomDigit(),
            'solicitado' => $this->faker->numberBetween(-1, 35)(),
            'disponible' => $this->faker->boolean(),
            'fecha_registro' => $this->faker->date(),
            'fecha_vencimiento' => $this->faker->date(),
            'estatus' => $this->faker->randomElement(['Activo', 'Inactivo', 'Suspendido']),
            'cambios' => $this->faker->text(),
            'observaciones' => $this->faker->paragraph(),
        ];
    }
}
