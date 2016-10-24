<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingpersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missingpersons', function (Blueprint $table) {
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
            $table->string('mis_fname');
            $table->string('mis_lname');
            $table->string('mis_gender');
            $table->string('age');
            $table->string('missing_date');
            $table->string('missing_location');
            $table->text('mp_address');
            $table->string('mp_city');
            $table->string('mp_phone');
            $table->string('mp_occupation');
            $table->string('mp_height');
            $table->text('mp_remarks');
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
        Schema::drop('missingpersons');
    }
}
