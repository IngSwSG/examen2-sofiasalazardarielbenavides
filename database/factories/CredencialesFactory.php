<?php

namespace Database\Factories;

use App\Models\Credencial;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credencial>
 */
class CredencialesFactory extends Factory
{
    protected $model = Credencial::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuario = Usuario::inRandomOrder()->first() ?? Usuario::factory()->create();

        return [
            'nombreUsuario' => $this->faker->unique()->userName,
            'contrasena' => bcrypt('password'),
            'usuario_idUsuario' => $usuario->idUsuario,
        ];
    }
}