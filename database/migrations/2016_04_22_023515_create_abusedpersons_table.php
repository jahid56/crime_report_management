<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbusedpersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abusedpersons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('street_address_home');
            $table->string('city');
            $table->string('zip_code');
            $table->string('phone_number');
            $table->string('email');
            $table->string('gender');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('relation');
            $table->string('ab_fname');
            $table->string('ab_lname');
            $table->string('age');
            $table->string('incident_date');
            $table->string('incident_location');
            $table->text('ab_address');
            $table->string('ab_city');
            $table->string('religion');
            $table->string('abused_by');
            $table->string('reason');
            $table->text('narrative');
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
        Schema::drop('abusedpersons');
    }
}
