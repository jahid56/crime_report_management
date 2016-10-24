<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offenders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('offender_name');
            $table->string('age');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('height');
            $table->string('gender');
            $table->string('identification_mask');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('criminal_activities');
            $table->string('case_details');
            $table->integer('rand');
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
        Schema::drop('offenders');
    }
}
