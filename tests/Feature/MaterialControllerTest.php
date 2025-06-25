<?php

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('dado un material que no existe, se inserta correctamente', function () {
    $categoria = Categoria::factory()->create();

    $material = [
        'unidadMedida' => 'litros',
        'descripcion' => 'Pintura blanca',
        'ubicacion' => 'Estantería 3',
        'idCategoria' => $categoria->idCategoria,
    ];

    
    $response = $this->postJson('/api/materiales', $material);

    
    $response->assertStatus(201)
        ->assertJsonFragment([
            'descripcion' => 'Pintura blanca',
            'unidadMedida' => 'litros',
        ]);

    $this->assertDatabaseHas('materiales', [
        'descripcion' => 'Pintura blanca',
        'unidadMedida' => 'litros',
    ]);
});
// Test sugerido
test('insertar material falla cuando faltan campos requeridos', function () {
    $response = $this->postJson('/api/materiales', [
        'descripcion' => 'Tornillos',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['unidadMedida', 'idCategoria']);
});