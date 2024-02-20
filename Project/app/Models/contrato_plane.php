<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrato_plane extends Model
{
    use HasFactory;
    protected $fillable = [
        'operador',
        'plan',
        'linea',
        'estado_plan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'estado_plan',
        'operador',
    ];
}
