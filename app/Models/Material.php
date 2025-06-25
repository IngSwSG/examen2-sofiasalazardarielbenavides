<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialFactory> */
    use HasFactory;

    protected $table = 'materiales';
    protected $primaryKey = 'codigo';

    protected $fillable = ['unidadMedida', 'descripcion', 'ubicacion', 'idCategoria'];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }

    public function materialesUnidad()
    {
        return $this->hasMany(MaterialUnidad::class, 'idMaterial');
    }

}