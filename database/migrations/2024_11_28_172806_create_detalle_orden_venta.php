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
        Schema::create('detalle_orden_venta', function (Blueprint $table) {
            $table->id('id_detalle_orden_venta');
            $table->unsignedBigInteger('id_orden_venta');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('cantidad');

            //Foraneas

            $table->foreign('id_orden_venta')->references('id_orden_venta')->on('orden_venta');
            $table->foreign('id_producto')->references('id')->on('product');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_orden_venta');
    }
};
