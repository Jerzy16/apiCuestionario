<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = [
        'CodUsu',
        'NomUsu',
        'AppUsu',
        'ApmUsu',
        'DocUsu',
        'PassUsu',
        'EmaUsu',
        'CelUsu',
        'sexUsu',
        'FnaUsu',
        'RegUsu'
    ];

    protected $primaryKey = 'CodUsu';

    protected $casts = [
        'PassUsu' => 'hashed',
    ];
}
