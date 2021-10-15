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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ord_id');
            $table->foreignId('ord_user_id')->constrained('users','user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('shipping_address',255)->nullable();
            $table->string('billing_address',255)->nullable();
            $table->boolean('ord_pay_delayed')->default(false);
            $table->date('payment_date')->nullable()->useCurrent();
            $table->string('ord_status');
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
        Schema::dropIfExists('orders');
    }
}
