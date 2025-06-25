<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;


    protected $primaryKey = 'idCategoria';

    protected $fillable = ['nombre'];

    public function materiales()
    {
        return $this->hasMany(Material::class, 'idCategoria');
    }
}