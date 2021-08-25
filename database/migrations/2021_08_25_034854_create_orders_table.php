<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         *  Tabela de pedidos
         *  faz relacionamento com produtos 
         *  atravez de order_products (N:N). 
         * */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('Note');
            $table->unsignedBigInteger('payment');
            $table->float('amount');
            $table->string('status');
            $table->timestamps();

            // Constraints
            $table->foreign('payment')->references('id')->on('payments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}