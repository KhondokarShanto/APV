<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('image');
            $table->string('phone');
            $table->string('email');
            $table->string('nid');
            $table->timestamp('birth_date');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_address');
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
        Schema::dropIfExists('suppliers');
    }
}
