<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_fees', function (Blueprint $table) {
            $table->increments('fees_id');
            $table->integer('student_id');
            $table->boolean('is_paid');
            $table->date('paid_date');
            $date->date('next_due_date');
            $date->integer('fee');
            $table->foreign('student_id')->references('student_id')->on('student_details');
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
        Schema::dropIfExists('term_fees');
    }
}
