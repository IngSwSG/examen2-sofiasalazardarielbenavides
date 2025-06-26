<?php

namespace Database\Factories;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idUsuario' => $this->faker->uuid,
            'identificacion' => $this->faker->unique()->randomNumber(9),
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'telefono' => $this->faker->phoneNumber,
            'idRol' => Rol::inRandomOrder()->first()?->idRol ?? Rol::factory(),
        ];
    }
}