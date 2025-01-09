<?php

// 2025_01_09_000006_create_cultivos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivosTable extends Migration
{
    public function up()
    {
        Schema::create('cultivos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->nullable(); // sazonal, perene, etc.
            $table->decimal('area_plantada', 10, 2); // em hectares
            $table->date('data_plantio')->nullable();
            $table->date('data_colheita_estimada')->nullable();
            $table->string('status')->default('planejado'); // planejado, plantado, colhido
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cultivos');
    }
}
