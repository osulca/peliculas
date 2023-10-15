<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entrega_compras', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->float("peso");
            $table->string("seguimiento");
            $table->foreignId("cliente_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrega_compras');
    }
};