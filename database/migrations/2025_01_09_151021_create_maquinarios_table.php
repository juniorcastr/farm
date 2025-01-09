<?php

// 2025_01_09_000005_create_maquinarios_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinariosTable extends Migration
{
    public function up()
    {
        Schema::create('maquinarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo'); // e.g., trator, colheitadeira
            $table->date('data_aquisicao')->nullable();
            $table->string('estado')->default('ativo'); // ativo, manutenção, etc.
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maquinarios');
    }
}
