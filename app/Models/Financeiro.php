<?php

// Financeiro.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_transacao',
        'categoria',
        'valor',
        'data',
        'observacoes',
    ];
}
