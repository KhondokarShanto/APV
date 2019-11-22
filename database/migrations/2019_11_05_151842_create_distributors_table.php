<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('user_id');
          $table->string('image');
          $table->string('phone');
          $table->string('email');
          $table->string('nid');
          $table->timestamp('birth_date');
          $table->string('age');
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
        Schema::dropIfExists('distributors');
    }
}
