<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('ode_id');
            $table->foreignId('ode_pro_id')->constrained('products','pro_id');
            $table->foreignId('ode_ord_id')->constrained('orders','ord_id');
            $table->decimal('ode_unit_price',6,2);
            $table->integer('ode_quantity');
            $table->decimal('ode_discount',6,2);
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
        Schema::dropIfExists('order_details');
    }
}
