<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {//If "uers" table is not exists
     
         Schema::create('users', function (Blueprint $table) {
              $table->increments('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_address');
            $table->date('date_of_birth');
            $table->rememberToken();
            $table->timestamps();
        });
        }
  
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
