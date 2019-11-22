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
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->integer('phone_no')->unique();
            $table->string('email')->unique();
            $table->string('email_verified_at')->nullable();
            $table->string('type');
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('nid');
            $table->string('birth_date');
            $table->string('address');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('status')->default('pending');
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
