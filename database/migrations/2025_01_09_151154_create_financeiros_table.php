<?php

// 2025_01_09_000010_create_financeiros_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceirosTable extends Migration
{
    public function up()
    {
        Schema::create('financeiros', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_transacao'); // Receita ou Despesa
            $table->string('categoria')->nullable(); // venda, compra de insumos, etc.
            $table->decimal('valor', 10, 2);
            $table->date('data');
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financeiros');
    }
}
