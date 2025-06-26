<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    /** @use HasFactory<\Database\Factories\CredencialesFactory> */
    use HasFactory;

    protected $primaryKey = 'nombreUsuario';
    public $incrementing = false;

    protected $fillable = [
        'nombreUsuario',
        'contrasena',
        'usuario_idUsuario'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_idUsuario');
    }
}