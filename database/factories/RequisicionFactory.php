<?php

namespace Database\Factories;

use App\Models\Requisicion;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requisicion>
 */
class RequisicionFactory extends Factory
{
    protected $model = Requisicion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->dateTimeThisYear(),
            'estado' => $this->faker->randomElement(['Pendiente', 'Aprobada', 'Rechazada']),
            'usuario_idUsuario' => Usuario::inRandomOrder()->first()?->idUsuario ?? Usuario::factory(),
        ];
    }
}