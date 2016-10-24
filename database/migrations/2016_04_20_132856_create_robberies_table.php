<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobberiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robberies', function (Blueprint $table) {
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
            $table->string('street_address_incident');
            $table->string('city_incident');
            $table->string('zip_code_incident');
            $table->string('incident_start');
            $table->string('incident_end');
            $table->string('witness');
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->string('serial_no');
            $table->string('how_many');
            $table->text('description');
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
        Schema::drop('robberies');
    }
}