<?php

namespace Database\Factories;

use App\Models\Contacto;
use App\Models\Empresas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Contacto::class;
    public function definition(): array
    {
        return [
            'empresas_id' => Empresas::factory(),
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'cargo' => $this->faker->jobTitle(),
            'correo_electronico' => $this->faker->email(),
            'correo_electronico2' => $this->faker->optional()->email(),
            'telefono' => $this->faker->phoneNumber(),
            'telefono2' => $this->faker->optional()->phoneNumber(),
            'extension' => $this->faker->phoneNumber,
            'celular' => $this->faker->optional()->phoneNumber(),
            'fecha_nacimiento' => $this->faker->date('Y-m-d'),
            'fecha_ingreso' => $this->faker->dateTime('Y-m-d', null),
            'estatus' => $this->faker->randomElement(['Activo', 'Inactivo', 'Suspendido']),
            'cambios' => $this->faker->text(),
        ];
    }
}
