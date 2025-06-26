<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemRequisicion extends Model
{
    /** @use HasFactory<\Database\Factories\ItemRequisicionFactory> */
    use HasFactory;

    protected $primaryKey = 'idItemRequisicion';

    protected $fillable = ['idRequisicion', 'idMaterial', 'cantidad', 'cantidadAprobada'];

    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class, 'idRequisicion');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'idMaterial');
    }
}