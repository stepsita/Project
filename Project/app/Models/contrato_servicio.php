<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato_servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'operador',
        'servicio',
        'linea',
        'estado_servicio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'estado_servicio',
        'operador',
    ];
}
