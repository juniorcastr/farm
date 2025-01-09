<?php

// Cultivo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'area_plantada',
        'data_plantio',
        'data_colheita_estimada',
        'status',
    ];
}
