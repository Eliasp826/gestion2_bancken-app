<?php

namespace Database\Factories;

use App\Models\Empresas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresas>
 */
class EmpresasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected  $model = Empresas::class;
    public function definition(): array
    {
        return [
            'nombre_empresa' => $this->faker->company(),
            'direccion' => $this->faker->streetAddress(),
            'telefono' => $this->faker->phoneNumber(),
            'celular' => $this->faker->phoneNumber(),
            'extension' => $this->faker->phoneNumber(),
            'correo_electronico' => $this->faker->email(),
            'url' => $this->faker->url(),
            'rnc' => $this->faker->randomNumber(),
            'observaciones' => $this->faker->paragraph(),
            'fecha_registro' => $this->faker->date('Y-m-d',null),
            'estatus' => $this->faker->randomElement(['ACTIVO','INACTIVO']),
            'cambios' => $this->faker->text(),
        ];
    }
}
