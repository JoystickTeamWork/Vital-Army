<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unique();
            $table->string('buyer');
            $table->string('payment_method');
            $table->integer('payment_id')->unique();
            $table->float('total');
            $table->string('carrier')->default('No definido');
            $table->integer('carrier_guide');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('pedidos_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pedido');
            $table->string('model');
            $table->string('size');
            $table->string('color');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('pedidos_meta');
    }
}
