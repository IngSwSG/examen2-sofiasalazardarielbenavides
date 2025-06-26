<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /** @use HasFactory<\Database\Factories\RolFactory> */
    use HasFactory;
    protected $primaryKey = 'idRol';
    public $incrementing = true;

    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'idRol');
    }
}