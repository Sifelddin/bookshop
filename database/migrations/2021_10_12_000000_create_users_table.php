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
            $table->foreignId('user_dep_id')->nullable()->constrained('departments','dep_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_status_id')->default(1)->constrained('user_statuses','status_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_commercial_id')->nullable()->constrained('users','user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_address',255);
            $table->string('user_zipcode',5);
            $table->string('user_city',30);
            $table->decimal('user_coef',5,2)->nullable()->default(1);
            $table->string('user_phone',10)->unique();
            $table->decimal('user_salary',8,2)->nullable();
            $table->string('user_role',90)->nullable();
            $table->boolean('disabled')->nullable()->default(null);
            $table->string('email',255)->unique();
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
