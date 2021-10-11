<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_lastname');
            $table->string('user_firstname');
            $table->string('user_address',255);
            $table->string('user_zipcode',5);
            $table->string('user_city',30);
            $table->string('user_phone',10)->unique();
            $table->decimal('salary',8,2)->nullable();
            $table->char('user_gender',1)->nullable();
            $table->string('user_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
