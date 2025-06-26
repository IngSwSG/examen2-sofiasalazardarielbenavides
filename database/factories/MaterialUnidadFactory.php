<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\MaterialUnidad;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaterialUnidad>
 */
class MaterialUnidadFactory extends Factory
{
    protected $model = MaterialUnidad::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'cantidad' => $this->faker->numberBetween(10, 500),
            'idUnidad' => Unidad::inRandomOrder()->first()?->idUnidad ?? Unidad::factory(),
            'idMaterial' => Material::inRandomOrder()->first()?->codigo ?? Material::factory(),
        ];
    }
}