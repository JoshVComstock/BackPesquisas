<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centrosinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'centro_diagnostico',
        'sede',
        'centro',
        'foto',
        'telefono',
        'dirreccion',
    ];
}  
