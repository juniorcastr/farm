<?php

// 2025_01_09_000009_create_insumos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->nullable(); // fertilizante, herbicida, etc.
            $table->decimal('quantidade', 10, 2);
            $table->string('unidade_medida')->default('kg'); // kg, litros, etc.
            $table->foreignId('fornecedor_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('insumos');
    }
}
