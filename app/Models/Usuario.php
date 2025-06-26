<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /** @use HasFactory<\Database\Factories\UsuarioFactory> */
    use HasFactory;

    protected $primaryKey = 'idUsuario';

    protected $keyType = 'string';

    protected $fillable = [
        'idUsuario',
        'identificacion',
        'nombre',
        'apellidos',
        'telefono',
        'idRol'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'idRol');
    }

    public function credencial()
    {
        return $this->hasOne(Credencial::class, 'usuario_idUsuario');
    }

    public function requisiciones()
    {
        return $this->hasMany(Requisicion::class, 'usuario_idUsuario');
    }
}