<?php

// Maquinario.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquinario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'data_aquisicao',
        'estado',
        'observacoes',
    ];
}

