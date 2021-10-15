<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('pro_id');
            $table->foreignId('pro_cat_id')->constrained('categories','cat_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pro_user_id')->nullable()->constrained('users','user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('pro_title',200);
            $table->string('pro_author',100);
            $table->date('pro_release');
            $table->string('ISBN',30)->unique();
            $table->decimal('pro_price',6,2)->unsigned();
            $table->text('pro_description');
            $table->string('pro_photo',300);
            $table->integer('pro_stock');
            $table->integer('pro_stock_alert')->nullable();
            $table->boolean('pro_publish')->default(true);
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
        Schema::dropIfExists('products');
    }
}
