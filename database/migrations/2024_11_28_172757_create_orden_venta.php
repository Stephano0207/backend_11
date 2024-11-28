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
        Schema::create('orden_venta', function (Blueprint $table) {
            $table->id('id_orden_venta');
            $table->double('total');
            $table->date('fecha_emision');
            $table->unsignedBigInteger('id_cliente');

            //Llaves Foraneas
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente')->onDelete('CASCADE');
            // $table->unsignedBigInteger('id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_venta');
    }
};
