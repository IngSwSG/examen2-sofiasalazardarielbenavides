<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialUnidad extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialUnidadFactory> */
    use HasFactory;


    protected $primaryKey = 'idMaterialUnidad';

    protected $fillable = ['cantidad', 'idUnidad', 'idMaterial'];

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'idMaterial');
    }

    public function presupuestos()
    {
        return $this->belongsToMany(Presupuesto::class, 'material_unidad_presupuesto', 'idMaterialUnidad', 'codigoPresupuesto');
    }
}