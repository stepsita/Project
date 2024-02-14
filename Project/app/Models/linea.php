<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linea extends Model
{
    use HasFactory;
    protected $fillable = [
        'cedula',
        'codigo',
        'numero',
        'plan',
        'servicio',
        'pago',
        'estado_linea',
        'fecha',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
        'estado_linea',
        'fecha',
    ];
}


