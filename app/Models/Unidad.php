<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    /** @use HasFactory<\Database\Factories\UnidadFactory> */
    use HasFactory;
    protected $primaryKey = 'idUnidad';

    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'idUnidad');
    }

    public function materialUnidad()
    {
        return $this->hasMany(MaterialUnidad::class, 'idUnidad');
    }
}