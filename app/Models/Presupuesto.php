<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    /** @use HasFactory<\Database\Factories\PresupuestoFactory> */
    use HasFactory;

    protected $primaryKey = 'codigoPresupuesto';

    protected $fillable = ['nombrePresupuesto'];

    public function materialUnidad()
    {
        return $this->belongsToMany(MaterialUnidad::class, 'material_unidad_presupuesto', 'codigoPresupuesto', 'idMaterialUnidad');
    }
}