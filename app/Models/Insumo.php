<?php

// Insumo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'quantidade',
        'unidade_medida',
        'fornecedor_id',
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}

