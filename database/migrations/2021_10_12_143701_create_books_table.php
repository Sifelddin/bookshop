<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->foreignId('book_cat_id')->constrained('categories','cat_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('book_user_id')->nullable()->constrained('users','user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('book_title',200);
            $table->string('book_author',100);
            $table->date('book_release');
            $table->string('ISBN',30)->unique();
            $table->decimal('book_price',6,2)->unsigned();
            $table->text('book_description');
            $table->string('book_photo',300);
            $table->integer('book_stock');
            $table->integer('book_stock_alert')->nullable();
            $table->boolean('book_publish')->default(true);
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
        Schema::dropIfExists('books');
    }
}
